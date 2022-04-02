<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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
Route::get('/home', function () {
    return view('screen.home',[
        "title" => "CRM"
    ]);
});

Route::get('/masuk', [MasukController::class, 'index']);
Route::post('/keluar', [MasukController::class, 'keluar']);

Route::get('/daftar', [DaftarController::class, 'index']);
Route::post('/daftar', [DaftarController::class, 'store']);

Route::post('/masuk', [MasukController::class, 'authenticate']);

Route::group(['middleware' =>['auth:user,admin']], function(){
    Route::get('/user', function(){
        return view('user.index',[
            "title" => "Halaman Dashboard"
        ]);
    })->middleware('auth');

    Route::get('/user/akun', function(){
        return view('user.akun',[
            "title" => "Halaman Akun"
        ]);
    })->middleware('auth');

    Route::get('/admin', function(){
        return view('admin.admin',[
            "title" => "Halaman User"
        ]);
    })->middleware('auth');

    Route::resource('/user/profil', UserController::class)->middleware('auth');
    Route::get('/user/akun', [UserController::class, 'index_akun'])->middleware('auth');
});

