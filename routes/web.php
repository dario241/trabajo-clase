<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get("test_template", function(){
    return view("layout.template");
});

Route::get("iniciars",function (){
    return view("layout.inicio");
});

Route::get("check",function (){
    return view("layout.checkout");
});

Route::get("treva",function (){
    return view("layout.treva");
});

Route::get("example1",function (){
    return view("examples.example1");
});

Route::resource("tipos_reacciones",\App\Http\Controllers\ReactionTypeController::class);

Route::resource("tipos_post",\App\Http\Controllers\ReactionTypeController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
