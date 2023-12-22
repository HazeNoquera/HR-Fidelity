<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\loginController;

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

Route::get('/',function(){
    return view('login');  
})->name('login');
Route::get('/login', [loginController::class,'login'])->name('login');
Route::post('/login', [loginController::class,'loginPost'])->name('loginPost');

Route::get('/Home',function(){
    return view('Home');  
})->name('Home');

Route::get('/Manage_Admins',function(){
    return view('Manage_Admins');  
})->name('Manage_Admins');