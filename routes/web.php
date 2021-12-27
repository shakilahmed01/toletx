<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(["verify"=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/index', [App\Http\Controllers\DashboardController::class, 'index'])->name('index');
//begin userInformation
Route::post('post/user/information',[App\http\controllers\UserinformationController::class, 'post_user_information'])->name('post_user_information');
//end userInformation

//otp login
Route::post('login_new',  [App\http\controllers\UserinformationController::class,'login_new'])->name('newlogin');

Route::post('loginWithOtp', [App\http\controllers\UserinformationController::class,'loginWithOtp'])->name('loginWithOtp');
Route::get('loginWithOtp', [App\http\controllers\UserinformationController::class,'indexotp'])->name('loginotp');


Route::post('sendOtp', [App\http\controllers\UserinformationController::class, 'sendOtp']);
Route::post('newregister', [App\http\controllers\UserinformationController::class, 'register'])->name('newregister');
//end otp login


//Facebook Login URL
Route::prefix('facebook')->name('facebook.')->group( function(){
    Route::get('auth', [App\Http\Controllers\FaceBookController::class, 'loginUsingFacebook'])->name('login');
    Route::get('callback', [App\Http\Controllers\FaceBookController::class, 'callbackFromFacebook'])->name('callback');
});

//end facebook login

// Google login
Route::get('login/google', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleGoogleCallback']);

// Facebook login
Route::get('login/facebook', [App\Http\Controllers\Auth\LoginController::class, 'redirectToFacebook'])->name('login.facebook');
Route::get('login/facebook/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleFacebookCallback']);



//begin admin Dashboard
Route::get('/admin/index', [App\Http\Controllers\DashboardController::class, 'admin_index'])->name('admin_index');
Route::get('/custom/login', [App\Http\Controllers\DashboardController::class, 'custom_login'])->name('custom_login');
Route::get('/custom/register', [App\Http\Controllers\DashboardController::class, 'custom_register'])->name('custom_register');

//end Adnmin
