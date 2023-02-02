<?php

use App\Http\Controllers\IceController;
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

// Route::get('/', function () {
//     return view('main');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/pateikti', function () {return view('ice/pateikti');})->name('pateikti');
Route::get('/', [IceController::class, 'index'])->name('main');
Route::post('/ice/store', [IceController::class,'store'])->name('ice.store');
Route::get('/ice/index2', [IceController::class,'index2'])->name('ice.index')->middleware('auth');
Route::post('/destroy/{ice}', [IceController::class,'destroy'])->name('ice.destroy');

