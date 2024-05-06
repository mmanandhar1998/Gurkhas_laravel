<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\ReservationController;
use App\Models\User;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[RestaurantController::class,'index'])->name("home");

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');
    Route::post('/insertfood',[RestaurantController::class,'insertfood'])->name("insertFood");
    Route::get('/dashboard',[RestaurantController::class,'table'])->name("dashboard");
    Route::get('/delete/{id}',[RestaurantController::class,'delete'])->name("delete");
    Route::get('/update/{id}',[RestaurantController::class,'update'])->name("update");
    Route::post('/updatemenu/{id}',[RestaurantController::class,'updatemenu'])->name("updatemenu");
    Route::get('/reservations',[ReservationController::class,'booking'])->name("booking");
    Route::post('/booktable',[ReservationController::class,'booktable'])->name("booktable");
    Route::get('/userdashboard',[ReservationController::class,'userdashboard'])->name("userdashboard");
    Route::get('/deletereservation/{id}',[ReservationController::class,'deletereservation'])->name("deletereservation");
});
