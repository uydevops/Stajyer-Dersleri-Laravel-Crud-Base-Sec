<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestControlller;
use Illuminate\Support\Facades\Auth;



Route::get('/', function () {
    return view('welcome');
});


Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/deneme', [TestController::class, 'test'])->name('test');
    Route::get('/detail', [TestController::class, 'detail'])->name('detail');

    Route::get('/kitaplar', [BookController::class, 'index'])->name('index');
    Route::get('/kitaplar/ekle', [BookController::class, 'create'])->name('create');
    Route::post('/kitaplar/ekle', [BookController::class, 'store'])->name('book.store');
    Route::get('/kitaplar/edit/{id}', [BookController::class, 'edit'])->name('book.edit');
    Route::get('/kitaplar/update/{id}', [BookController::class, 'update'])->name('book.update');
    Route::get('/kitaplar/delete/{id}', [BookController::class, 'delete'])->name('book.delete');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
