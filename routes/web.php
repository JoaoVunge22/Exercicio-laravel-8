<?php

use App\Http\Controllers\contactController;
use App\Http\Controllers\insert_contactController;
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

Route::get('/',[contactController::class,'index']);

Route::get('novo_contacto', function () {
    return view('new_contact');
})->name('novo_contacto');

Route::get('detalhes',[contactController::class,'detalhes'])->name('detalhes');
Route::post('store',[contactController::class,'store'])->name('store');
Route::get('delete',[contactController::class,'delete'])->name('delete');
Route::get('create_update',[contactController::class,'create_update'])->name('create_update');
Route::put('update',[contactController::class,'update'])->name('update');
