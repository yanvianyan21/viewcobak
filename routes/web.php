<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BaranController;

Route::get('/index', [BaranController::class, 'index'])->name('index');


