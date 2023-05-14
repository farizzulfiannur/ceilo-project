<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\loginController;
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

Route::get('/',[homeController:: class,'index'])->name('index');
Route::get('/product',[homeController::class,'product'])->name('product');

// Login Register Route 

Route::get('/admin_login',[loginController::class,'login'])->name('login');
Route::post('/admin_login/proses',[loginController::class,'proseslogin'])->name('proseslogin');
Route::post('/admin_regist/proses',[loginController::class,'prosesregistrasi'])->name('prosesregistrasi');


// Dashboard
Route::get('/admin',[adminController::class,'dashboard'])->name('dashboard')->middleware('auth');
Route::get('/admin_logout',[adminController::class,'logout'])->name('logout');

// Contact Us
Route::post('/send_contact',[ContactController::class,'sendcontact'])->name('sendcontact');
Route::get('/admin/contact_us',[ContactController::class,'contact'])->name('contact');
Route::get('/admin/contact_us/delete/{id}',[ContactController::class,'deletecontact'])->name('deletecontact');

// Product 
Route::get('/admin/product',[])