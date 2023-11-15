<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\HomeController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\FeedbackController;

use App\Http\Controllers\Member\MemberController;
use App\Http\Controllers\Member\MemberJoinController;

use App\Http\Controllers\Member\PrintingController;
use App\Http\Controllers\LoginController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



// Auth
Route::get('admin/login', [HomeController::class, 'login'])->name('admin.login');
Route::post('/admin/signin', [HomeController::class, 'signin'])->name('admin.signin');




Route::group(['middleware' => 'auth:admin'], function () {


	
// Manage
Route::get('/admin/dashboard', [HomeController::class, 'index'])->name('admin.dashboard');

	//users

Route::get('/admin/user', [UserController::class, 'index'])->name('user.index');
Route::get('/admin/', [UserController::class, 'index'])->name('user.index');
Route::get('/admin/delete/{id}', [UserController::class, 'destroy'])->name('user.delete');


// feedback
Route::get('/admin/feedback', [FeedbackController::class, 'index'])->name('all.Feedback');
Route::get('/admin/comment/disabled/{id}', [FeedbackController::class, 'comment_block'])->name('feedback.comment-disabled');
Route::get('/admin/feedback/view/{id}', [FeedbackController::class, 'feedback_view'])->name('feedback.view');
Route::get('/feedback/delete/{id}', [FeedbackController::class, 'destroy'])->name('feedback.delete');

Route::get('/userprofile', [HomeController::class, 'userProfile'])->name('user.profile');

Route::get('/admin/logout', [UserController::class, 'logout'])->name('admin.logout');

});




	Route::get('/login', [MemberController::class, 'login'])->name('userlogin.form');
	Route::post('/login/store', [MemberController::class, 'SignIn'])->name('user.login.store');
	Route::get('/register', [MemberController::class, 'create'])->name('register.form');
	Route::post('/register/store', [MemberController::class, 'register'])->name('user.register.store');
	Route::get('/verify-email/{token}', [LoginController::class, 'verifyEmail'])->name('verify.email');

	

	Route::post('/check-email', [MemberController::class, 'checkEmail'])->name('check.email');


	Route::get('/forgotpassword', [MemberController::class, 'forgotpassword'])->name('forgot-password');
	Route::middleware(['throttle:1,1'])->post('/forgotpassword/email', [MemberController::class, 'send_email'])->name('forgot-email');

	Route::get('/resetpassword/{token}', [MemberController::class, 'Reset_password'])->name('reset-password');
	Route::post('/savepassword', [MemberController::class, 'Save_password'])->name('save-reset-password');
Route::post('/feedback/store', [MemberController::class, 'feedback_store'])->name('feedback-store');



Route::group(['middleware' => 'member'], function () {
Route::get('/index', [MemberController::class, 'index'])->name('member.index');

Route::get('/single/feedback/{id}', [MemberController::class, 'feedback_get'])->name('single.feedback');
Route::post('/save/comment/', [MemberController::class, 'comment_store'])->name('save.comment');

Route::put('/profile/update', [MemberController::class, 'updateProfile'])->name('member.udateProfile');

Route::put('/change-password', [MemberController::class, 'changePassword'])->name('change.password');
Route::Post('/check-old-password', [MemberController::class, 'check_oldpassword'])->name('check-old-password');

Route::post('/logout', [MemberController::class, 'logout'])->name('logout');
Route::get('/logout', [MemberController::class, 'logout'])->name('click-logout');

});



Route::get('/{feedback?}', function () {
    return view('feedback.index');
});