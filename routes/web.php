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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::controller(App\Http\Controllers\BeritaController::class)->group(function () {
    Route::get('/berita', 'index');
    Route::get('/berita/{berita}', 'show');
});
Route::controller(App\Http\Controllers\CariAlumniController::class)->group(function () {
    Route::get('cari-alumni', 'index');
    Route::get('cari-alumni/{alumni}', 'show');
});
Route::controller(App\Http\Controllers\ProfileController::class)->middleware('auth')->group(function () {
    Route::get('edit-profile/{user}', 'edit');
    Route::put('edit-profile/{user}', 'update');
});
Route::get('/galeri', [App\Http\Controllers\GaleriController::class, 'index']);
Route::controller(App\Http\Controllers\AuthController::class)->middleware('guest')->group(function () {
    Route::get('register', 'register');
    Route::post('register', 'create');
    ROute::get('login', 'login')->name('login');
    Route::post('login', 'authenticate');
});
Route::get('logout', [App\Http\Controllers\AuthController::class, 'logout'])->middleware('auth');
Route::controller(App\Http\Controllers\AuthController::class)->group(
    function () {
        Route::get('admin/login', 'adminlogin');
        Route::post('admin/login', 'auth_admin');
    }
);
Route::group(['middleware' => 'is_admin', 'prefix' => 'admin'], function () {
    Route::get('logout', [App\Http\Controllers\AuthController::class, 'admin_logout']);
    Route::get('dashboard/home', [App\Http\Controllers\DashboardHomeController::class, 'index']);
    Route::resource('dashboard/aktivitas', App\Http\Controllers\DashboardAktivitasController::class);
    Route::resource('dashboard/berita', App\Http\Controllers\DashboardBeritaController::class);
    Route::resource('dashboard/alumni', App\Http\Controllers\DashboardAlumniController::class)->except(['create', 'edit', 'update', 'store']);
    Route::resource('dashboard/galeri', App\Http\Controllers\DashboardGaleriController::class)->except(['show', 'edit', 'update']);
    Route::controller(App\Http\Controllers\DashboardStatusTahunController::class)->group(function () {
        Route::get('dashboard/status&tahun-lulus', 'index');
        Route::get('dashboard/status&tahun-lulus/create', 'create');
        Route::post('dashboard/status&tahun-lulus', 'store');
        Route::delete('dashboard/status/{status:id}', 'delete_status');
        Route::delete('dashboard/tahun-lulus/{tahun:id}', 'delete_tahunlulus');
    });
});
