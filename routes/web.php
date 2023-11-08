<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Models\student;
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




Route::get('/', [HomeController::class, 'index'])->name('create');
Route::post('store', [HomeController::class, 'store'])->name('store');

Route::get('edit/{id}', [HomeController::class, 'edit'])->name('edit');

Route::post('update', [HomeController::class, 'update'])->name('update');

Route::delete('delete', [HomeController::class, 'destroy'])->name('delete');


