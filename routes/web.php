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

//begin community center
Route::get('/add/community', [App\Http\Controllers\DashboardController::class, 'add_community'])->name('add_community');
Route::get('/list/community', [App\Http\Controllers\DashboardController::class, 'list_community'])->name('list_community');
Route::post('/post/community', [App\Http\Controllers\DashboardController::class, 'post_community_information'])->name('post_community_information');
Route::get('/community/edit/{id}',[App\Http\Controllers\DashboardController::class, 'community_edit'])->name('community_edit');
Route::post('/community/update',[App\Http\Controllers\DashboardController::class, 'community_update'])->name('community_update');
Route::get('/community/delete/{id}',[App\Http\Controllers\DashboardController::class, 'community_delete'])->name('community_delete');
Route::get('/community/restore/{id}',[App\Http\Controllers\DashboardController::class, 'community_restore'])->name('community_restore');
//end community center

//begin shooting spot
Route::get('/add/shooting', [App\Http\Controllers\DashboardController::class, 'add_shooting'])->name('add_shooting');
Route::get('/list/shooting', [App\Http\Controllers\DashboardController::class, 'list_shooting'])->name('list_shooting');
Route::post('/post/shooting', [App\Http\Controllers\DashboardController::class, 'post_shooting_information'])->name('post_shooting_information');
Route::get('/shooting/edit/{id}',[App\Http\Controllers\DashboardController::class, 'shooting_edit'])->name('shooting_edit');
Route::post('/shooting/update',[App\Http\Controllers\DashboardController::class, 'shooting_update'])->name('shooting_update');
Route::get('/shooting/delete/{id}',[App\Http\Controllers\DashboardController::class, 'shooting_delete'])->name('shooting_delete');
Route::get('/shooting/restore/{id}',[App\Http\Controllers\DashboardController::class, 'shooting_restore'])->name('shooting_restore');
//end shooting spot

//begin shop
Route::get('/add/shop', [App\Http\Controllers\DashboardController::class, 'add_shop'])->name('add_shop');
Route::get('/list/shop', [App\Http\Controllers\DashboardController::class, 'list_shop'])->name('list_shop');
Route::post('/post/shop', [App\Http\Controllers\DashboardController::class, 'post_shop_information'])->name('post_shop_information');
Route::get('/shop/edit/{id}',[App\Http\Controllers\DashboardController::class, 'shop_edit'])->name('shop_edit');
Route::post('/shop/update',[App\Http\Controllers\DashboardController::class, 'shop_update'])->name('shop_update');
Route::get('/shop/delete/{id}',[App\Http\Controllers\DashboardController::class, 'shop_delete'])->name('shop_delete');
Route::get('/shop/restore/{id}',[App\Http\Controllers\DashboardController::class, 'shop_restore'])->name('shop_restore');
//end shop

//begin factory
Route::get('/add/factory', [App\Http\Controllers\DashboardController::class, 'add_factory'])->name('add_factory');
Route::get('/list/factory', [App\Http\Controllers\DashboardController::class, 'list_factory'])->name('list_factory');
Route::post('/post/factory', [App\Http\Controllers\DashboardController::class, 'post_factory_information'])->name('post_factory_information');
Route::get('/factory/edit/{id}',[App\Http\Controllers\DashboardController::class, 'factory_edit'])->name('factory_edit');
Route::post('/factory/update',[App\Http\Controllers\DashboardController::class, 'factory_update'])->name('factory_update');
Route::get('/factory/delete/{id}',[App\Http\Controllers\DashboardController::class, 'factory_delete'])->name('factory_delete');
Route::get('/factory/restore/{id}',[App\Http\Controllers\DashboardController::class, 'factory_restore'])->name('factory_restore');
//end factory

//begin warehouse
Route::get('/add/warehouse', [App\Http\Controllers\DashboardController::class, 'add_warehouse'])->name('add_warehouse');
Route::get('/list/warehouse', [App\Http\Controllers\DashboardController::class, 'list_warehouse'])->name('list_warehouse');
Route::post('/post/warehouse', [App\Http\Controllers\DashboardController::class, 'post_warehouse_information'])->name('post_warehouse_information');
Route::get('/warehouse/edit/{id}',[App\Http\Controllers\DashboardController::class, 'warehouse_edit'])->name('warehouse_edit');
Route::post('/warehouse/update',[App\Http\Controllers\DashboardController::class, 'warehouse_update'])->name('warehouse_update');
Route::get('/warehouse/delete/{id}',[App\Http\Controllers\DashboardController::class, 'warehouse_delete'])->name('warehouse_delete');
Route::get('/warehouse/restore/{id}',[App\Http\Controllers\DashboardController::class, 'warehouse_restore'])->name('warehouse_restore');
//end warehouse

//begin pond
Route::get('/add/pond', [App\Http\Controllers\DashboardController::class, 'add_pond'])->name('add_pond');
Route::get('/list/pond', [App\Http\Controllers\DashboardController::class, 'list_pond'])->name('list_pond');
Route::post('/post/pond', [App\Http\Controllers\DashboardController::class, 'post_pond_information'])->name('post_pond_information');
Route::get('/pond/edit/{id}',[App\Http\Controllers\DashboardController::class, 'pond_edit'])->name('pond_edit');
Route::post('/pond/update',[App\Http\Controllers\DashboardController::class, 'pond_update'])->name('pond_update');
Route::get('/pond/delete/{id}',[App\Http\Controllers\DashboardController::class, 'pond_delete'])->name('pond_delete');
Route::get('/pond/restore/{id}',[App\Http\Controllers\DashboardController::class, 'pond_restore'])->name('pond_restore');
//end pond

//begin swimmingpool
Route::get('/add/swimmingpool', [App\Http\Controllers\DashboardController::class, 'add_swimmingpool'])->name('add_swimmingpool');
Route::get('/list/swimmingpool', [App\Http\Controllers\DashboardController::class, 'list_swimmingpool'])->name('list_swimmingpool');
Route::post('/post/swimmingpool', [App\Http\Controllers\DashboardController::class, 'post_swimmingpool_information'])->name('post_swimmingpool_information');
Route::get('/swimmingpool/edit/{id}',[App\Http\Controllers\DashboardController::class, 'swimmingpool_edit'])->name('swimmingpool_edit');
Route::post('/swimmingpool/update',[App\Http\Controllers\DashboardController::class, 'swimmingpool_update'])->name('swimmingpool_update');
Route::get('/swimmingpool/delete/{id}',[App\Http\Controllers\DashboardController::class, 'swimmingpool_delete'])->name('swimmingpool_delete');
Route::get('/swimmingpool/restore/{id}',[App\Http\Controllers\DashboardController::class, 'swimmingpool_restore'])->name('swimmingpool_restore');
//end swimmingpool

//begin Bilboard
Route::get('/add/bilboard', [App\Http\Controllers\DashboardController::class, 'add_bilboard'])->name('add_bilboard');
Route::get('/list/bilboard', [App\Http\Controllers\DashboardController::class, 'list_bilboard'])->name('list_bilboard');
Route::post('/post/bilboard', [App\Http\Controllers\DashboardController::class, 'post_bilboard_information'])->name('post_bilboard_information');
Route::get('/bilboard/edit/{id}',[App\Http\Controllers\DashboardController::class, 'bilboard_edit'])->name('bilboard_edit');
Route::post('/bilboard/update',[App\Http\Controllers\DashboardController::class, 'bilboard_update'])->name('bilboard_update');
Route::get('/bilboard/delete/{id}',[App\Http\Controllers\DashboardController::class, 'bilboard_delete'])->name('bilboard_delete');
Route::get('/bilboard/restore/{id}',[App\Http\Controllers\DashboardController::class, 'bilboard_restore'])->name('bilboard_restore');
//end bilboard

//begin rooftop
Route::get('/add/rooftop', [App\Http\Controllers\DashboardController::class, 'add_rooftop'])->name('add_rooftop');
Route::get('/list/rooftop', [App\Http\Controllers\DashboardController::class, 'list_rooftop'])->name('list_rooftop');
Route::post('/post/rooftop', [App\Http\Controllers\DashboardController::class, 'post_rooftop_information'])->name('post_rooftop_information');
Route::get('/rooftop/edit/{id}',[App\Http\Controllers\DashboardController::class, 'rooftop_edit'])->name('rooftop_edit');
Route::post('/rooftop/update',[App\Http\Controllers\DashboardController::class, 'rooftop_update'])->name('rooftop_update');
Route::get('/rooftop/delete/{id}',[App\Http\Controllers\DashboardController::class, 'rooftop_delete'])->name('rooftop_delete');
Route::get('/rooftop/restore/{id}',[App\Http\Controllers\DashboardController::class, 'rooftop_restore'])->name('rooftop_restore');
//end rooftop

//begin restuarant
Route::get('/add/restuarant', [App\Http\Controllers\DashboardController::class, 'add_restuarant'])->name('add_restuarant');
Route::get('/list/restuarant', [App\Http\Controllers\DashboardController::class, 'list_restuarant'])->name('list_restuarant');
Route::post('/post/restuarant', [App\Http\Controllers\DashboardController::class, 'post_restuarant_information'])->name('post_restuarant_information');
Route::get('/restuarant/edit/{id}',[App\Http\Controllers\DashboardController::class, 'restuarant_edit'])->name('restuarant_edit');
Route::post('/restuarant/update',[App\Http\Controllers\DashboardController::class, 'restuarant_update'])->name('restuarant_update');
Route::get('/restuarant/delete/{id}',[App\Http\Controllers\DashboardController::class, 'restuarant_delete'])->name('restuarant_delete');
Route::get('/restuarant/restore/{id}',[App\Http\Controllers\DashboardController::class, 'restuarant_restore'])->name('restuarant_restore');
//end restuarant

//begin gallery
Route::get('/add/gallery', [App\Http\Controllers\DashboardController::class, 'add_gallery'])->name('add_gallery');
Route::get('/list/gallery', [App\Http\Controllers\DashboardController::class, 'list_gallery'])->name('list_gallery');
Route::post('/post/gallery', [App\Http\Controllers\DashboardController::class, 'post_gallery_information'])->name('post_gallery_information');
Route::get('/gallery/edit/{id}',[App\Http\Controllers\DashboardController::class, 'gallery_edit'])->name('gallery_edit');
Route::post('/gallery/update',[App\Http\Controllers\DashboardController::class, 'gallery_update'])->name('gallery_update');
Route::get('/gallery/delete/{id}',[App\Http\Controllers\DashboardController::class, 'gallery_delete'])->name('gallery_delete');
Route::get('/gallery/restore/{id}',[App\Http\Controllers\DashboardController::class, 'gallery_restore'])->name('gallery_restore');
//end gallery

//begin playground
Route::get('/add/playground', [App\Http\Controllers\DashboardController::class, 'add_playground'])->name('add_playground');
Route::get('/list/playground', [App\Http\Controllers\DashboardController::class, 'list_playground'])->name('list_playground');
Route::post('/post/playground', [App\Http\Controllers\DashboardController::class, 'post_playground_information'])->name('post_playground_information');
Route::get('/playground/edit/{id}',[App\Http\Controllers\DashboardController::class, 'playground_edit'])->name('playground_edit');
Route::post('/playground/update',[App\Http\Controllers\DashboardController::class, 'playground_update'])->name('playground_update');
Route::get('/playground/delete/{id}',[App\Http\Controllers\DashboardController::class, 'playground_delete'])->name('playground_delete');
Route::get('/playground/restore/{id}',[App\Http\Controllers\DashboardController::class, 'playground_restore'])->name('playground_restore');
//end playground

//begin exibutioncenter
Route::get('/add/exibutioncenter', [App\Http\Controllers\DashboardController::class, 'add_exibutioncenter'])->name('add_exibutioncenter');
Route::get('/list/exibutioncenter', [App\Http\Controllers\DashboardController::class, 'list_exibutioncenter'])->name('list_exibutioncenter');
Route::post('/post/exibutioncenter', [App\Http\Controllers\DashboardController::class, 'post_exibutioncenter_information'])->name('post_exibutioncenter_information');
Route::get('/exibutioncenter/edit/{id}',[App\Http\Controllers\DashboardController::class, 'exibutioncenter_edit'])->name('exibutioncenter_edit');
Route::post('/exibutioncenter/update',[App\Http\Controllers\DashboardController::class, 'exibutioncenter_update'])->name('exibutioncenter_update');
Route::get('/exibutioncenter/delete/{id}',[App\Http\Controllers\DashboardController::class, 'exibutioncenter_delete'])->name('exibutioncenter_delete');
Route::get('/exibutioncenter/restore/{id}',[App\Http\Controllers\DashboardController::class, 'exibutioncenter_restore'])->name('exibutioncenter_restore');
//end exibutioncenter
//end Admin
