<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('book/create', [BookController::class, 'create'])->name('book.create');
Route::post('book', [BookController::class, 'store'])->name("store"); 
Route::get('book/success', [BookController::class, 'success'])->name('book-success');
