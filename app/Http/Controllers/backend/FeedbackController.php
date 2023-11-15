<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Feedback;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use App\Models\Comment;
use Illuminate\Http\Response;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $feedback     =  Feedback::get();
        return view('backend.feedback.index', compact('feedback'));
    }

    public function comment_block($id)
    {

        $record = Feedback::find($id);
        // dd($record);
        if($record->status === '1'){
            $record->update(['status' => '0']);
        }else{
            $record->update(['status' => '1']);
            


        }
        return redirect()->back();


    }
    
    public function feedback_view($id)
    {
        $feedback  =   Feedback::where('id', $id)->first();
        $comment = Comment::where('feedback_id', $id)->with('user')->get();

        return view('backend.feedback.view', compact('feedback', 'comment'));

    }
 

    public function destroy($id)
    {
        $feedback = Feedback::find($id);
    
        if ($feedback) {
            $feedback->delete();
    
            $comments = Comment::where('feedback_id', $id)->get();
            foreach ($comments as $comment) {
                $comment->delete();
            }
        } else {
        }
    
        return redirect()->back()->with('success', 'Feedback and related comments deleted successfully.');
    }
    
}
