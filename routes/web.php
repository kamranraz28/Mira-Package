<?php
use Illuminate\Support\Facades\Route;
use Kamran\Mira\Http\Controllers\MiraController;

Route::middleware(['web'])->prefix('mira')->group(function () {
    Route::get('/', [MiraController::class, 'index']);
    Route::post('/generate', [MiraController::class, 'generate']);
});
