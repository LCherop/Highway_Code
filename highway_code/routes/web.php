<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\recordController;
use App\Http\Controllers\alloffensesController;
use App\Http\Controllers\committedController;

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
    return view('home');
});

//all users
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

//drivers
Route::get('/records',[recordController::class,'driver_records']);

//officers

//admin
/*Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', function () {
        return view('admindashboard');
        
    });
});*/

//All listed offenses 
Route::get('/alloffenses',[alloffensesController::class,'alloffenses']);

//Specific driver offenses
Route::get('/allrecords',[committedController::class,'driver_offenses']);

require __DIR__.'/auth.php';
