<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerUjian;

Route::get('/ujian', [ControllerUjian::class, 'index']);
Route::post('/ujian', [ControllerUjian::class, 'store']);

