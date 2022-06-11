<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\UserController;

Route::get('/',[PagesController::class,'Home'])->name('root');
Route::get('/register',[UserController::class,'create'])->name('mid.register');
Route::post('/register',[UserController::class,'createSubmit'])->name('mid.register.submit');
Route::get('/login',[UserController::class,'login'])->name('mid.login');
Route::post('/login',[UserController::class,'loginSubmit'])->name('mid.login.submit');
Route::get('/dashboard',[UserController::class,'list'])->name('mid.list');
Route::get('/details/{id}/{name}',[UserController::class,'user'])->name('mid.details');
