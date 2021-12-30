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
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\PostController;

Route::resource('/home',\App\Http\Controllers\PostController::class);

Route::get('/logout', function(){
    Auth::logout();
    return redirect('/home');
})->name('logout');

Route::get('/change', function(){
    $user = Auth::user();
    return view('change',compact('user'));
})->name('change');

Route::get('/', function () {
    if(Auth::check()){
        return redirect('/home');
    }
    return view('welcome');
})->name('/');

Route::get('/register', function () {
    return view('welcome');
})->name('register');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
