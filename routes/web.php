<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataProduksiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StokHasilProduksi;
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

// Route::get('/', function () {
//     return view('auth.login');
// });
Route::get('/', [LoginController::class, 'index']);
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/auth', [LoginController::class, 'authenticate'])->name('auth');
// Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::group(['middleware'], function () {
    dd('test');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::match(['get', 'post'], '/logout', [LoginController::class, 'logout'])->name('logout');


    Route::get('/stokhasilproduksi', [StokHasilProduksi::class, 'index'])->name('stokhasilproduksi.index');

    //DATA PRODUKSI
    Route::get('/DataProduksi', [DataProduksiController::class, 'index'])->name('dataproduksi.index');
    Route::post('/DataProduksistore', [DataProduksiController::class, 'store'])->name('dataproduksi'); //ini untuk input data
});



// stokhasilproduksi

// Route::group(['middleware' => ['auth']], function () {
//     Route::post('/dashboard', function () {
//         return view('dashboard.index');
// });
// });