<?php

use Illuminate\Support\Facades\Route;
use Skthon\Assetbook\Controllers\AssetbookController;

Route::get('/assets', [AssetbookController::class, 'index'])->name('assets.index');