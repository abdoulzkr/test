<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LinkController;
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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', [HomeController::class, 'index']);
Route::get('/links', [LinkController::class, 'index'])->name('link.index');
Route::get('/links/create', [LinkController::class, 'create'])->name('link.create');
Route::post('/links/store', [LinkController::class, 'store'])->name('link.store');
Route::get('/links/all', [LinkController::class, 'index'])->name('link.all');
Route::get('/links/delete/{link}', [LinkController::class, 'destroy'])->name('link.delete');
