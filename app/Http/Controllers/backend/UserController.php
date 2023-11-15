<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $user     =  User::get();
        return view('backend.User.index', compact('user'));
    }

    public function destroy($id)
    {
        $user = User::find($id);

        if ($user) {
            $user->delete();
        } else {
        }

        return redirect()->back()->with('success', 'User updated successfully.');

    }

    public function logout()
    {
     
        Auth::guard('admin')->logout(); 
        session()->forget('ADMIN_LOGIN');
		session()->forget('ADMIN_ID');
		session()->flash('Error', 'Logout Successfully');
		return redirect('admin');
      
    }
}
