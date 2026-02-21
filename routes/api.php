<?php

use App\Http\Controllers\Api\ArticleApiController;
use App\Http\Controllers\Api\ProjectApiController;
use Illuminate\Support\Facades\Route;

Route::get('/articles', [ArticleApiController::class, 'index']);
Route::get('/projects', [ProjectApiController::class, 'index']);
