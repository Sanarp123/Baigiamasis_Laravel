<?php

use App\Http\Controllers\IceController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\UserController;
use Illuminate\Routing\RouteGroup;
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

Route::prefix('report')->group(function(){
Route::get('/index', [ReportController::class,'index'])->name('report.index')->middleware('auth');
Route::post('/destroy/{report}', [ReportController::class, 'destroy'])->name('report.destroy')->middleware('auth');;
});

Route::prefix('users')->group(function(){
    Route::get('/', [UserController::class, 'index'])->name('users.index')->middleware('auth');;
    Route::get('/create', [UserController::class, 'create'])->name('users.create')->middleware('auth');;
    Route::get('/store', [UserController::class, 'store'])->name('users.store')->middleware('auth');;
    Route::get('/edit/{user}', [UserController::class, 'edit'])->name('users.edit')->middleware('auth');;
    Route::get('/update/{user}', [UserController::class, 'update'])->name('users.update')->middleware('auth');;
    Route::post('/destroy/{user}', [UserController::class, 'destroy'])->name('users.destroy')->middleware('auth');;
    Route::get('/show/{user}', [UserController::class, 'show'])->name('users.show')->middleware('auth');;
});

// Route::prefix('roles')->group(function(){
//     Route::get('/', [UserController::class, 'index'])->name('users.index')->middleware('auth');;
//     Route::get('/create', [UserController::class, 'create'])->name('users.create')->middleware('auth');;
//     Route::get('/store', [UserController::class, 'store'])->name('users.store')->middleware('auth');;
//     Route::get('/edit/{user}', [UserController::class, 'edit'])->name('users.edit')->middleware('auth');;
//     Route::get('/update/{user}', [UserController::class, 'update'])->name('users.update')->middleware('auth');;
//     Route::get('/destroy/{user}', [UserController::class, 'destroy'])->name('users.destroy')->middleware('auth');;
//     Route::get('/show/{user}', [UserController::class, 'show'])->name('users.show')->middleware('auth');;
// });

// Route::prefix('permissions')->group(function(){
//     Route::get('/', [UserController::class, 'index'])->name('users.index')->middleware('auth');;
//     Route::get('/create', [UserController::class, 'create'])->name('users.create')->middleware('auth');;
//     Route::get('/store', [UserController::class, 'store'])->name('users.store')->middleware('auth');;
//     Route::get('/edit/{user}', [UserController::class, 'edit'])->name('users.edit')->middleware('auth');;
//     Route::get('/update/{user}', [UserController::class, 'update'])->name('users.update')->middleware('auth');;
//     Route::get('/destroy/{user}', [UserController::class, 'destroy'])->name('users.destroy')->middleware('auth');;
//     Route::get('/show/{user}', [UserController::class, 'show'])->name('users.show')->middleware('auth');;
// });

