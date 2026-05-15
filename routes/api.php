<?php

use App\Http\Controllers\UserControler;
use Illuminate\Support\Facades\Route;


// Route::get('/users', [UserControler::class, 'index']);
// Route::post('/users', [UserControler::class, 'store']);

Route::apiResource('/users', UserControler::class);
