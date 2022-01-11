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
//begin hotel
Route::get('/add/hotel', [App\Http\Controllers\DashboardController::class, 'add_hotel'])->name('add_hotel');
Route::post('/post/hotel', [App\Http\Controllers\DashboardController::class, 'post_hotel_information'])->name('post_hotel_information');
Route::get('/list/hotel', [App\Http\Controllers\DashboardController::class, 'list_hotel'])->name('list_hotel');
Route::get('/hotel/edit/{id}',[App\Http\Controllers\DashboardController::class, 'hotel_edit'])->name('hotel_edit');
Route::post('/hotel/update',[App\Http\Controllers\DashboardController::class, 'hotel_update'])->name('hotel_update');
Route::get('/hotel/delete/{id}',[App\Http\Controllers\DashboardController::class, 'hotel_delete'])->name('hotel_delete');
Route::get('/hotel/restore/{id}',[App\Http\Controllers\DashboardController::class, 'hotel_restore'])->name('hotel_restore');

//end hotel

//begin room
Route::get('/add/room', [App\Http\Controllers\DashboardController::class, 'add_room'])->name('add_room');
Route::get('/list/room', [App\Http\Controllers\DashboardController::class, 'list_room'])->name('list_room');
Route::post('/post/room', [App\Http\Controllers\DashboardController::class, 'post_room_information'])->name('post_room_information');
Route::get('/room/edit/{id}',[App\Http\Controllers\DashboardController::class, 'room_edit'])->name('room_edit');
Route::post('/room/update',[App\Http\Controllers\DashboardController::class, 'room_update'])->name('room_update');
Route::get('/room/delete/{id}',[App\Http\Controllers\DashboardController::class, 'room_delete'])->name('room_delete');
Route::get('/room/restore/{id}',[App\Http\Controllers\DashboardController::class, 'room_restore'])->name('room_restore');

//end room


//begin flat
Route::get('/add/flat', [App\Http\Controllers\DashboardController::class, 'add_flat'])->name('add_flat');
Route::get('/list/flat', [App\Http\Controllers\DashboardController::class, 'list_flat'])->name('list_flat');
Route::post('/post/flat', [App\Http\Controllers\DashboardController::class, 'post_flat_information'])->name('post_flat_information');
Route::get('/flat/edit/{id}',[App\Http\Controllers\DashboardController::class, 'flat_edit'])->name('flat_edit');
Route::post('/flat/update',[App\Http\Controllers\DashboardController::class, 'flat_update'])->name('flat_update');
Route::get('/flat/delete/{id}',[App\Http\Controllers\DashboardController::class, 'flat_delete'])->name('flat_delete');
Route::get('/flat/restore/{id}',[App\Http\Controllers\DashboardController::class, 'flat_restore'])->name('flat_restore');
//end flat

//begin parking spot
Route::get('/add/parking', [App\Http\Controllers\DashboardController::class, 'add_parking_spot'])->name('add_parking_spot');
Route::get('/list/parking', [App\Http\Controllers\DashboardController::class, 'list_parking_spot'])->name('list_parking_spot');
Route::post('/post/parking', [App\Http\Controllers\DashboardController::class, 'post_parking_spot_information'])->name('post_parking_spot_information');
Route::get('/parking/edit/{id}',[App\Http\Controllers\DashboardController::class, 'parking_spot_edit'])->name('parking_spot_edit');
Route::post('/parking/update',[App\Http\Controllers\DashboardController::class, 'parking_spot_update'])->name('parking_spot_update');
Route::get('/parking/delete/{id}',[App\Http\Controllers\DashboardController::class, 'parking_spot_delete'])->name('parking_spot_delete');
Route::get('/parking/restore/{id}',[App\Http\Controllers\DashboardController::class, 'parking_spot_restore'])->name('parking_spot_restore');
//end parking spot

//begin hostel
Route::get('/list/hostel', [App\Http\Controllers\DashboardController::class,'list_hostel'])->name('list_hostel');
Route::get('/add/hostel', [App\Http\Controllers\DashboardController::class, 'add_hostel'])->name('add_hostel');
Route::post('/post/hostel', [App\Http\Controllers\DashboardController::class, 'post_hostel_information'])->name('post_hostel_information');
Route::get('/hostel/edit/{id}',[App\Http\Controllers\DashboardController::class, 'hostel_edit'])->name('hostel_edit');
Route::get('/hostel/delete/{id}',[App\Http\Controllers\DashboardController::class, 'hostel_delete'])->name('hostel_delete');
Route::get('/hostel/restore/{id}',[App\Http\Controllers\DashboardController::class, 'hostel_restore'])->name('hostel_restore');
Route::post('/hostel/update',[App\Http\Controllers\DashboardController::class, 'hostel_update'])->name('hostel_update');

//end hostel

//begin office
Route::get('/add/office', [App\Http\Controllers\DashboardController::class, 'add_office'])->name('add_office');
Route::get('/list/office', [App\Http\Controllers\DashboardController::class, 'list_office'])->name('list_office');
Route::post('/post/office', [App\Http\Controllers\DashboardController::class, 'post_office_information'])->name('post_office_information');
Route::get('/office/edit/{id}',[App\Http\Controllers\DashboardController::class, 'office_edit'])->name('office_edit');
Route::post('/office/update',[App\Http\Controllers\DashboardController::class, 'office_update'])->name('office_update');
Route::get('/office/delete/{id}',[App\Http\Controllers\DashboardController::class, 'office_delete'])->name('office_delete');
Route::get('/office/restore/{id}',[App\Http\Controllers\DashboardController::class, 'office_restore'])->name('office_restore');
//end office

//begin Land
Route::get('/add/land', [App\Http\Controllers\DashboardController::class, 'add_land'])->name('add_land');
Route::get('/list/land', [App\Http\Controllers\DashboardController::class, 'list_land'])->name('list_land');
Route::post('/post/land', [App\Http\Controllers\DashboardController::class, 'post_land_information'])->name('post_land_information');
Route::get('/land/edit/{id}',[App\Http\Controllers\DashboardController::class, 'land_edit'])->name('land_edit');
Route::post('/land/update',[App\Http\Controllers\DashboardController::class, 'land_update'])->name('land_update');
Route::get('/land/delete/{id}',[App\Http\Controllers\DashboardController::class, 'land_delete'])->name('land_delete');
Route::get('/land/restore/{id}',[App\Http\Controllers\DashboardController::class, 'land_restore'])->name('land_restore');
//end Land
//end Admin
