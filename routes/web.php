<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
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

Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/logout', function () {
    Session::forget('user');
    return redirect('/login');
});

Route::post('/login',[UserController::class,'login']);
Route::post('/register',[UserController::class,'register']);
Route::get('/',[ProductController::class,'ProductIndex']);
Route::get('/detail/{id}',[ProductController::class,'detail']);
Route::post('/addtocard',[ProductController::class,'addtocard']);

Route::get('/cartitem',[ProductController::class,'cartitem']);

Route::get('/cartlist',[ProductController::class,'cartlist']);
Route::get('/remove/{id}',[ProductController::class,'remove']);

Route::get('/order',[ProductController::class,'order']);
Route::get('/myorder',[ProductController::class,'myorder']);
Route::post('/orderinformation',[ProductController::class,'ordeIrnfo']);
Route::post('/mainorder',[ProductController::class,'mainorder']);
Route::post('/mainorderinfo',[ProductController::class,'mainorderinfo']);