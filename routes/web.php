<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;

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


Route::get('/home', [UserController::class, 'index'])->middleware('checkView');

Route::get('/listUser',[UserController::class,'index']);
Route::get('/', function () {
    return view('welcome');
});

Route::get('/users/findUser', [UserController::class, 'findUser']);

Route::get('/users/delete/{id}', [UserController::class, 'deleteUser']);

Route::get('/users/edit/{id}', [UserController::class, 'edit']);
Route::post('/users/edit/{id}', [UserController::class, 'update']);
Route::get('/users/show/{id}', [UserController::class, 'show']);

Route::get('/login', [LoginController::class, 'getLogin'])->middleware('checkLogin');
Route::post('/login', [LoginController::class, 'postLogin']);

Route::get('/signup', [LoginController::class, 'signUp']);
Route::post('/signup', [LoginController::class, 'postSignUp']);


Route::get('/welcome', [LoginController::class, 'welcome']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/admin', function ()
{
    return view('admin.admin');
    })->middleware('admin') ;
