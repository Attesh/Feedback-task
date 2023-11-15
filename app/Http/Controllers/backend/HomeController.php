<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
    	return view('backend.index');
    }
  

    public function login()
    {
    	return view('backend.login');
    }
    public function userProfile(){
    	return view('backend.user_profile');
    }
 



    public function signin(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        if (auth()->guard('admin')->attempt(['email' => $email, 'password' => $password])) {

            $user = auth()->guard('admin')->user();
            return redirect()->route('admin.dashboard')->with('error', 'admin Login Successfully');
          
        }
        return back()->with('error', 'Invaild Email Or Password');
      
    }
}
