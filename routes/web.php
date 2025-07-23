<?php

use App\Http\Controllers\FactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/fact', [FactController::class, 'show'])->name('fact.new');
Route::get('/facts', [FactController::class, 'index']);
