<?php

use Illuminate\Support\Facades\Route;
use Skthon\Assetbook\Controllers\AssetbookController;

Route::get('/assets', [AssetbookController::class, 'index'])->name('assets.index');
Route::get('/assets/videos', [AssetbookController::class, 'videos'])->name('assets.videos');
Route::get('/assets/optimize', [AssetbookController::class, 'optimize'])->name('assets.optimize');
Route::get('/assets/search', [AssetbookController::class, 'search'])->name('assets.search');