<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\EmailController;
// use App\Http\Controllers\BookingController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\UserDetailController;
use App\Http\Controllers\VehicleDetailController;
use App\Http\Controllers\VehiclesOwnerController;
use App\Http\Controllers\CustomerDetailsController;

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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
Route::get('/{lang}/welcome', function ($lang) {
    App::setlocale($lang);
    return view('welcome');
})->name('language');
Route::get('/{lang}/register', function ($lang) {
    App::setlocale($lang);
    return view('auth.register');
});
Route::get('/{lang}/booking', function ($lang) {
    App::setlocale($lang);
    return view('bookingform');
});
Route::get('/rough', function () {
    return view('roughwork');
});
Route::resource('vehicles_details', VehicleDetailController::class);
// Route::resource('vehicles_details', VehicleDetailController::class)->middleware('method:PUT');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

Route::middleware('auth')->group(function () {
    //dashboard
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/setting', [ProfileController::class, 'setting'])->name('profile.setting');
    Route::post('/changesetting', [ProfileController::class, 'store']);

    //vehicle
    Route::get('/vehiclesdetails', [VehicleDetailController::class, 'show'])->name('vehiclesdetails');
    Route::get('/vehiclesadd', [VehicleDetailController::class, 'create'])->name('profile.addv');
    Route::post('/vehiclestore', [VehicleDetailController::class, 'store']);

    //user
    Route::get('/usersdetails', [UserDetailController::class, 'show'])->name('usersdetails');

    //location
    Route::get('/locationadd', [LocationController::class, 'create'])->name('profile.locationadd');
    Route::post('/locationstore', [LocationController::class, 'store']);
    Route::get('/locationadd', [LocationController::class, 'show'])->name('profile.locationadd');

    //vehicles owner
    Route::resource('vehiclesowner', VehiclesOwnerController::class);
    Route::get('/vehiclesowner', [VehiclesOwnerController::class, 'show'])->name('vehiclesowner');
    Route::get('/vehiclesowner-add', [VehiclesOwnerController::class, 'create'])->name('profile.vehiclesowneradd');
    Route::post('/vehiclesowner-store', [VehiclesOwnerController::class, 'store']);

    //vehicles owner
    Route::resource('booking-details', BookingController::class);
    Route::get('/booking-details', [BookingController::class, 'show'])->name('booking-details');

    //customer-details
    Route::resource('customer-details', CustomerDetailsController::class);
    Route::get('/customer-details', [CustomerDetailsController::class, 'show'])->name('customer-details');
});

require __DIR__ . '/auth.php';


//user-end
Route::view("/vehicles", "vehicles");
Route::view("/blogs", "blogs");
Route::view("/contact", "contact");
Route::view("/bookingform/{id}", "bookingform")->name('bookingform');

//vehicle
Route::post('/filter', [VehicleDetailController::class, 'filter'])->name('filter'); 
//user
Route::resource('users_details', UserDetailController::class);
Route::post('/user_details', [UserDetailController::class, 'store']);

//contact
Route::resource('contactdetails', ContactController::class);
Route::post('/contactmessage', [ContactController::class, 'store']);
Route::get('/contactdetails', [ContactController::class, 'show'])->name('contactdetails');

//vehicles_details.edit//vehicles_details.destroy//vehicles_details.update

//testing purpose
Route::get('/testing',[BookingController::class,'index']);

Route::get('sessionchecking',[ContactController::class,'index']);

//cart routes
Route::get('/product', [ProductController::class, 'index']);  
Route::get('cart', [ProductController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [ProductController::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [ProductController::class, 'remove'])->name('remove.from.cart');