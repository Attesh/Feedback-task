<?php
namespace App\Http\Controllers\Member;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Country;
use Carbon\Carbon; 
use Hash;
use App\Models\Feedback;
use App\Models\Comment;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Session;


use Illuminate\Validation\Rule;
use App\Models\Settings;
use App\Models\Password_reset;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;


class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {

        return view('member.login');
    }
    public function signin(Request $request)
    { 
      
        $email = $request->input('email');
        $password = $request->input('password');
       

    
      
        if (auth()->attempt(['email' => $email, 'password' => $password])) {
          
            $user = auth()->user();
        
            $user->update(['last_login_at' => date('Y-m-d H:i:s')]);
        
            return response()->json(['success' => true, 'status' => 1]);
        }
        
        
     
      
        return response()->json(['success' => false, 'status' => 2, 'message' => 'Invalid Credentials']);
    }

    public function index(Request $request)
    {



        $userId = auth()->user()->id;
    
        $userEmail = auth()->user()->email;
    
       
        $user = User::find($userId);
    
        $feedback = Feedback::get();
        $comment = Comment::where('user_id',$userId)->get();
    
        
        $name = ''; 
        $price = ''; 
    
  
    
        $countries = Country::get();


        return view('member.index', compact(
            'user',
            'name',
            'countries',
            'feedback',
            'comment',
        ));
    }


  
    

    public function updateProfile(Request $request)
    {
       
        $user = auth()->user();
   
        $user->first_name = $request['first_name'];
        $user->last_name = $request['last_name'];
        $user->phone = $request['phone'];
        $user->city = $request['city'];
        $user->gender = $request['gender'];
        $user->country = $request['country'];
    
               if ($request->hasFile('image')) {
                 
                   $imageFile = $request->file('image');  
                   $imageName = uniqid() . '.' . $imageFile->getClientOriginalExtension();
                   
                   $imageFile->move(public_path('Backend/images'), $imageName);
                   $user->image = $imageName;
               }

  
        $user->save();
    
        return redirect()->back()->with('success', 'Profile updated successfully');
    }


    public function changePassword(Request $request)
    { 
        
        # Validation
        $request->validate([
            'old_password' => 'required',
            'password' => [
                'required',
                'confirmed',
                'regex:/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/',
            ],
        ], [
            'password.regex' => 'The password field format is invalid. It must contain at least 8 characters, including at least 1 capital letter, 1 special character, 1 numeric digit, and 1 small letter.',
        ]);
        
        
        $user = Auth::user();
        if(Hash::check($request->old_password, $user->password)){

            $user->password = Hash::make($request->input('password'));
            $user->save();
            return back()->with("status", "Password changed successfully!");
       
            
           
        }
        return back()->with("error", "Old Password Doesn't match!"); 

        
    }

    public function check_oldpassword(Request $request)
    {
        $user = $request->user(); // Get the authenticated user
        
        $oldPassword = $request->input('old_password');
        
        if (Hash::check($oldPassword, $user->password)) {
            return response()->json(['success' => true]);
        } else {
            return response()->json(['success' => false]);
        }
    }

   



    public function feedback_store(Request $request)
    {


        if (!Auth::check()) {
            Session::flash('Failed', 'You must be logged in to submit feedback.');
            return redirect()->back();
        }
        $user = Auth::user();
        $data = new Feedback();
        $data->user_id = $user->id;
        $data->name = $user->first_name . ' ' . $user->last_name;
        $data->email = $user->email;
        $data->phone_number    = $user->phone_number;
        $data->feedback    = $request->feedback;
        $data->title    = $request->title;
        $data->category    = $request->category;
        $data->vote_count = 0;
        $data->save();
        Session::flash('success', 'Feedback Submitted successfully.');

        return redirect()->back();
    }


    public function feedback_get($id)
    {
        $feedback = Feedback::find($id);

        $html = View::make('feedback.show', compact('feedback'))->render();


        // $comment = Comment::where('feedback_id',$id)->get();
        $comment = Comment::where('feedback_id', $id)->with('user')->get();


        $comment = View::make('feedback.comment', compact('comment'))->render();

        return response()->json(['html' => $html,'comment' =>$comment]);
    }



    public function comment_store(Request $request)
{
    $comment = Comment::create([
        'user_id' => auth()->id(),
        'feedback_id' => $request->feedback_id,
        'content' => $request->description,
        'rating' => $request->rating,
    ]);

    $vote_count = Comment::where('feedback_id',$request->feedback_id)->count();

    Feedback::where('id', $request->feedback_id)->increment('vote_count');


    // return redirect('/feedback')->with('success', 'Comment added successfully!');
    return redirect()->back()->with('success', 'Comment added successfully');

}


public function create()
{
    $countries = Country::get();
    return view('member.signup', compact('countries'));
}


public function register(Request $request)
{
    
    $formFields = $request->only([
        'first_name',
        'email',
        'city',
        'password',
        'gender',
        'country',
    ]);

    //Hash Password
    $formFields['password'] = bcrypt($formFields['password']);

    $user = User::create($formFields);

  


    return response()->json(['status' => 1]);
}


public function checkEmail(Request $request)
{
    $email = $request->input('email');

    $user = User::where('email', $email)->first();

    if ($user) {
        return response()->json(['exists' => true]);
    }

    return response()->json(['exists' => false]);
}


public function forgotpassword()
{
    return view('forgot-password');
}


public function send_email(Request $request)
{
    Password_reset::where('email', $request->email)->delete();
    $otp = str_pad(random_int(0, 999999), 6, '0', STR_PAD_LEFT);


    $data = new Password_reset;
    $data->email = $request->email;
    $data->token = $otp;
    $data->save();
    $user = User::where('email', $request->email)->first();
    $fullname = $user->first_name . ' ' . $user->last_name;

    try {
        Mail::send('email.reset-password', ['resetUrl' => $data->token, 'fullname' => $fullname], function ($message) use ($request) {
            $message->to($request->email)->subject('Reset Password');
        });

        return response()->json([
            'status_code' => true,
            'message' => 'Email sent successfully',
        ]);
    } catch (\Exception $e) {
        return response()->json([
            'status_code' => false,
            'message' => 'Email sending failed',
        ]);
    }
}


public function Reset_password(Request $request, $token)
{
    $verification = Password_reset::where('token', $token)->first();

    if ($verification) {
        $email = $verification->email;

        $expirationTime = now()->subMinutes(30); 
        if ($verification->created_at->lt($expirationTime)) {
            return view('frontend.password-reset-expired');
        }

        return view('frontend.reset-password', compact('email'));
    } else {
        abort(404); 
    }
}


public function Save_password(Request $request)
{

    $user = User::where('email', $request->email)->first();
    if ($user) {
        $user->password = Hash::make($request->pass);
        $user->save();
        Password_reset::where('email', $user->email)->delete();
        return response()->json([
            'status_code' => true,
            'message' => 'Password reset successfully',
        ]);
    } else {
        return response()->json([
            'status_code' => false,
            'message' => 'User not found with the provided email',
        ]);
    }
}

public function logout(Request $request)
{
    Auth::guard('member')->logout(); 
    Auth::logout();
    $request->session()->forget('MEMBER_LOGIN');

    return redirect('/feedback'); 
}
}
