<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\contatosController;
use App\Http\Controllers\insert_contactController;
use App\Http\Controllers\pessoasController;
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

Route::get('/',[pessoasController::class,'view']);
//
Route::get('login',[authController::class,'view'])->name('login');
Route::post('Fazer_login',[authController::class,'login'])->name('Fazer_login');
Route::get('register',[authController::class,'register'])->name('register');
Route::post('store_user',[authController::class,'store_user'])->name('store_user');
Route::get('logout_user',[authController::class,'logout_user'])->name('logout_user');

//Route pessoas
Route::get('pessoas',[pessoasController::class,'view'])->name('pessoas');
Route::get('add_pessoas',[pessoasController::class,'create'])->name('add_pessoas');
Route::post('store_pessoas',[pessoasController::class,'store'])->name('store_pessoas');
Route::get('delete_pessoas',[pessoasController::class,'delete'])->name('delete_pessoas')->middleware('auth');
Route::get('create_update_pessoa',[pessoasController::class,'create_update'])->name('create_update_pessoa')->middleware('auth');
Route::put('update_pessoa',[pessoasController::class,'update_pessoa'])->name('update_pessoa')->middleware('auth');

//detalhes pessoas
Route::get('detalhes',[pessoasController::class,'detalhes'])->name('detalhes')->middleware('auth');

//Route contatos
Route::get('add_contatos',[contatosController::class,'create'])->name('add_contatos')->middleware('auth');;
Route::post('store_contatos',[contatosController::class,'store'])->name('store_contatos');
Route::get('delete_contato',[contatosController::class,'delete_contato'])->name('delete_contato')->middleware('auth');

Route::get('novo_contacto', function () {
    return view('new_contact');
})->name('novo_contacto');



Route::post('store',[contactController::class,'store'])->name('store');


