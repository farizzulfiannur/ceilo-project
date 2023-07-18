<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\KataMerekaController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\ProductController;
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
Route::get('/contact',[homeController::class,'contactku'])->name('contactku');

// Login Register Route 

Route::get('/admin_login',[loginController::class,'login'])->name('login');
Route::post('/admin_login/proses',[loginController::class,'proseslogin'])->name('proseslogin');
Route::post('/admin_regist/proses',[loginController::class,'prosesregistrasi'])->name('prosesregistrasi');


// Dashboard
Route::get('/admin',[adminController::class,'dashboard'])->name('dashboard')->middleware('auth');
Route::get('/admin_logout',[adminController::class,'logout'])->name('logout');

// Contact Us
Route::post('/send_contact',[ContactController::class,'sendcontact'])->name('sendcontact');
Route::get('/admin/contact_us',[ContactController::class,'contact'])->name('contact')->middleware('auth');
Route::get('/admin/contact_us/delete/{id}',[ContactController::class,'deletecontact'])->name('deletecontact')->middleware('auth');;

// Product 
Route::get('/admin/product',[ProductController::class,'adminproduct'])->name('adminproduct')->middleware('auth');
Route::get('/admin/product/tambah',[ProductController::class,'tambahproduct'])->name('tambahproduct')->middleware('auth');
Route::post('/admin/product/store',[ProductController::class,'storeproduct'])->name('storeproduct')->middleware('auth');
Route::get('/admin/product/edit/{id}',[ProductController::class,'editproduct'])->name('editproduct')->middleware('auth');
Route::post('/admin/product/update/{id}',[ProductController::class,'updateproduct'])->name('updateproduct')->middleware('auth');
Route::get('/admin/product/delete/{id}',[ProductController::class,'deleteproduct'])->name('deleteproduct')->middleware('auth');


// Kata Mereka 
Route::get('admin/kata_mereka',[KataMerekaController::class,'adminkata'])->name('adminkata')->middleware('auth');
Route::get('/admin/kata_mereka/tambah',[KataMerekaController::class,'tambahkata'])->name('tambahkata')->middleware('auth');
Route::post('/admin/kata_mereka/store',[KataMerekaController::class,'storekata'])->name('storekata')->middleware('auth');
Route::get('/admin/kata_mereka/edit/{id}',[KataMerekaController::class,'editkata'])->name('editkata')->middleware('auth');
Route::post('/admin/kata_mereka/update/{id}',[KataMerekaController::class,'updatekata'])->name('updatekata')->middleware('auth');
Route::get('/admin/kata_mereka/delete/{id}',[KataMerekaController::class,'deletekata'])->name('deletekata')->middleware('auth');


// Client 
Route::get('admin/client',[ClientController::class,'adminclient'])->name('adminclient')->middleware('auth');
Route::get('/admin/client/tambah',[ClientController::class,'tambahclient'])->name('tambahclient')->middleware('auth');
Route::post('/admin/client/store',[ClientController::class,'storeclient'])->name('storeclient')->middleware('auth');
Route::get('/admin/client/edit/{id}',[ClientController::class,'editclient'])->name('editclient')->middleware('auth');
Route::post('/admin/client/update/{id}',[ClientController::class,'updateclient'])->name('updateclient')->middleware('auth');
Route::get('/admin/client/delete/{id}',[ClientController::class,'deleteclient'])->name('deleteclient')->middleware('auth');
