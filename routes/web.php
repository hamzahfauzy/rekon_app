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

Route::get('/', function () {
    return view('welcome');
});

Route::get('cari/{nip}',[HomeController::class,'cari'])->name('cari');

Auth::routes();
Route::get('/employees/import',[App\Http\Controllers\EmployeeController::class, 'import'])->name('employees.import');
Route::get('/employees/getdataemployee',[App\Http\Controllers\EmployeeController::class, 'getdataemployee'])->name('employees.getdataemployee');
Route::post('/employees/storeimport',[App\Http\Controllers\EmployeeController::class, 'storeimport'])->name('employees.storeimport');

Route::resource('employees',EmployeeController::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('update-pegawai',[HomeController::class,'updatePegawai'])->name('update-pegawai');
