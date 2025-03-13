<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cakecon;

Route::get('/index',[cakecon::class,'index']);

Route::get('/home',[cakecon::class,'home']);
Route::get('/register', [cakecon::class,'register']);
Route::post('/regform',[cakecon::class,'registeration']);

Route::get('/login',[cakecon::class,'login']); 
Route::post('/log',[cakecon::class,'loginpost']);

Route::get('/product',[cakecon::class,'product']);
Route::post('/upload', [cakecon::class, 'uploadFile'])->name('file.upload');

Route::get('/cakes',[cakecon::class,'cake']);
Route::get('/logout',[cakecon::class,'logouts']);

Route::get('/profile',[cakecon::class,'profile']);

Route::get('/items', [cakecon::class, 'view']);
Route::get('/items/{id}/edit', [cakecon::class, 'edit'])->name('items.edit');
Route::put('/items/{id}', [cakecon::class, 'update'])->name('items.update');
Route::delete('/items/{id}', [cakecon::class, 'destroy'])->name('items.destroy');

