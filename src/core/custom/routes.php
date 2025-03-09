<?php

use EvolutionCMS\Site\Controllers\BlogController;
use EvolutionCMS\Site\Controllers\TagsController;
use Illuminate\Support\Facades\Route;

Route::get('/tags', [TagsController::class, 'index']);
Route::get('/tags/{id}', [TagsController::class, 'show']);

Route::get('/blog/tags/{id}', [BlogController::class, 'tags']);

// If you need to wrap the parser with middleware
// or need grouping, uncomment this line
// Route::fallbackToParser();
