<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\offensesController;
use App\Http\Controllers\PersonalRecordsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminhomeController;
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

Route::get('/home',[homeController::class,'show']);


//all users
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

//Drivers
//Personal records
Route::get('/precords',[PersonalRecordsController::class,'personalR']);

//All listed offenses (info)
Route::get('/alloffenses',[alloffensesController::class,'alloffenses']);

//all users
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');






//Dashboard or Profile Page
Route::get('/admindashboard',[adminhomeController::class,'dash']);

//Specific driver offenses (committed offenses)
Route::get('/allrecords',[committedController::class,'driver_offenses']);




//admin
Route::middleware(['admin'])->group(function () {
    //Home
    Route::get('/adminhome',[adminhomeController::class,'home']);
    //Profile
    Route::get('/admindashboard',[adminhomeController::class,'dash']);

    Route::get('/admin', function () {
        return view('admindashboard'); 
    });
    //Control Log (adding an offence)
    Route::get('/controllog',[offensesController::class,'index']);
    Route::post('/controllog/push',[offensesController::class,'push']);
});


require __DIR__.'/auth.php';
