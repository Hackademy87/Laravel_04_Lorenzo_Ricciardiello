<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonalController;

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

Route::get('/', [PersonalController::class,'welcome'])->name('home');
Route::get('/ricerca', [PersonalController::class,'search'])->name('ricerca');
Route::get('/contatti',[ContactController::class,'contact'])->name('contatti');
Route::post('/contatti/nuovo',[ContactController::class,'newContact'])->name('contatto.nuovo');

