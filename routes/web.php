<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MasukController;
use App\Http\Controllers\DaftarController;

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
    return view('screen.home',[
        "title" => "CRM"
    ]);
})->name('/');
Route::get('/masuk', [MasukController::class, 'index']);

Route::get('/daftar', [DaftarController::class, 'index']);
Route::post('/daftar', [DaftarController::class, 'store']);

Route::post('/masuk', [MasukController::class, 'authenticate']);

Route::group(['middleware' =>['auth:user,admin']], function(){
    Route::get('/user', [UserController::class, 'index'])->middleware('auth');
    Route::get('/admin', [UserController::class, 'index'])->middleware('auth');
});
