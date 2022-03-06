<?php

use Illuminate\Support\Facades\Route;
use ThreeSidedCube\LaravelRedoc\Http\Controllers\DocumentationController;
use ThreeSidedCube\LaravelRedoc\Http\Controllers\DefinitionController;

Route::get(config('redoc.path'), DocumentationController::class)->name('redoc.documentation');
Route::get(config('redoc.path') . '/definition', DefinitionController::class)->name('redoc.definition');
