<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardCon;
use App\Http\Controllers\LoginCon;
use App\Http\Controllers\RegisterCon;
use App\Http\Controllers\produkcon;
use App\Http\Controllers\userCon;
use App\Http\Controllers\pembacacon;

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

Route::get('/', function () {
    return view('index');
});

route::get('profile', function () {
    return view('profile');
});
Route::get('index', function () {
    return view('index');
});
Route::get('details', function () {
    return view('details');
});
Route::get('browse', function () {
    return view('browse');
});
Route::get('streams', function () {
    return view('streams');
});

Route::get('/produk', [produkCon::class, 'home'])->name('homeproduk');

Route::get('/login', [LoginCon::class, 'login'])->name('login');
Route::post('actionlogin', [LoginCon::class, 'actionlogin'])->name('actionlogin');
Route::get('dashboard', [DashboardCon::class, 'index'])->name('dashboard')->middleware('auth');
Route::get('actionlogout', [LoginCon::class, 'actionlogout'])->name('actionlogout')->middleware('auth');
Route::get('register', [RegisterCon::class, 'register'])->name('register');
Route::post('register/action', [RegisterCon::class, 'actionregister'])->name('actionregister');

Route::get('/user/tampil', [UserCon::class, 'index'])->name('indexUser')->middleware('auth');
Route::get('/user/input', [UserCon::class, 'input'])->name('inputUser')->middleware('auth');
Route::post('/user/storeinput', [UserCon::class, 'storeinput'])->name('storeInputUser')->middleware('auth');
Route::get('/user/update/{id}', [UserCon::class, 'update'])->name('updateUser')->middleware('auth');
Route::post('/user/storeupdate', [UserCon::class, 'storeupdate'])->name('storeUpdateUser')->middleware('auth');
Route::get('/user/delete/{id}', [UserCon::class, 'delete'])->name('deleteUser')->middleware('auth');

Route::get('/produk/tampil', [produkcon::class, 'index'])->name('indexproduk')->middleware('auth');
Route::get('/produk/input', [produkcon::class, 'input'])->name('inputproduk')->middleware('auth');
Route::post('/produk/storeinput', [produkcon::class, 'storeinput'])->name('storeInputproduk')->middleware('auth');
Route::get('/produk/update/{id}', [produkcon::class, 'update'])->name('updateproduk')->middleware('auth');
Route::post('/produk/storeupdate', [produkcon::class, 'storeupdate'])->name('storeUpdateproduk')->middleware('auth');
Route::get('/produk/delete/{id}', [produkcon::class, 'delete'])->name('deleteproduk')->middleware('auth');
Route::get('/produk/upload', [produkcon::class, 'upload'])->name('upload')->middleware('auth');
Route::post('/produk/uploadproses', [produkcon::class, 'uploadproses'])->name('uploadproses')->middleware('auth');

Route::get('/pembaca/tampil', [pembacacon::class, 'index'])->name('indexpembaca')->middleware('auth');
Route::get('/pembaca/input', [pembacacon::class, 'input'])->name('inputpembaca')->middleware('auth');
Route::post('/pembaca/storeinput', [pembacacon::class, 'storeinput'])->name('storeInputpembaca')->middleware('auth');
Route::get('/pembaca/update/{kode}', [pembacacon::class, 'update'])->name('updatepembaca')->middleware('auth');
Route::post('/pembaca/storeupdate', [pembacacon::class, 'storeupdate'])->name('storeUpdatepembaca')->middleware('auth');
Route::get('/pembaca/delete/{kode}', [pembacacon::class, 'delete'])->name('deletepembaca')->middleware('auth');
Route::get('/pembaca/upload', [pembacacon::class, 'upload'])->name('upload')->middleware('auth');
Route::post('/pembaca/uploadproses', [pembacacon::class, 'uploadproses'])->name('uploadproses')->middleware('auth');

