<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\BookController;

Route::get('/books', [BookController::class, 'index']);
Route::post('/books', [BookController::class, 'store']);
