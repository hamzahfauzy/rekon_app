<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmployeeController;

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

Route::get('/', [HomeController::class, 'welcome'])->name('welcome');
Route::get('cari/{nip}', [HomeController::class, 'cari'])->name('cari');
Route::get('cari/{employee}/edit', [HomeController::class, 'edit'])->name('home.edit');
Route::patch('update-pegawai/{employee}', [HomeController::class, 'updatePegawai'])->name('update');

Auth::routes();
Route::resource('employees', EmployeeController::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('update-pegawai', [HomeController::class, 'updatePegawai'])->name('update-pegawai');
