<?php

use App\Http\Controllers\Api\Authenticated\AccountController;
use Illuminate\Support\Facades\Route;

Route::post("/", [ AccountController::class, 'createSpend' ])->name('create');
