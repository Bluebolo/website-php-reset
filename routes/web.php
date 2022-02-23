<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AdminController;
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

Route::get('/', [IndexController::class,'Index']);
Route::get('/article/id/{id}',[IndexController::class,'ArticleIndex']);
Route::get('/archives',[IndexController::class,'Archives']);
Route::get('/links',[IndexController::class,'Links']);
Route::get('/about',[IndexController::class,'About']);
Route::get('/diary/list',function (){
    return view('diary_list');
});
Route::get('/diary/{title}',[IndexController::class,'DiaryTitle']);
Route::any('/admin/editor',[AdminController::class,'Editor']);