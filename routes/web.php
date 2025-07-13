<?php

use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

Route::view('/','home');
Route::view('/example','example');
Route::view('/about','about');
Route::view('/contact','contact');

Route::get('/movies',[MovieController::class,'index']);
Route::get('/movies/create',[MovieController::class,'create']);
Route::post('/movies',[MovieController::class,'store']);
Route::get('/movies/{movie}',[MovieController::class,'show']);
Route::get('/movies/{movie}/edit',[MovieController::class,'edit']);
Route::put('/movies/{movie}',[MovieController::class,'update']);
Route::delete('/movies/{movie}',[MovieController::class,'destroy']);