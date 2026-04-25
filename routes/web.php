<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('components', function () {
    return Inertia::render('Components');
})->name('components');

Route::get('components/avatar', function () {
    return Inertia::render('components/Avatar');
})->name('components.avatar');

Route::get('components/item', function () {
    return Inertia::render('components/Item');
})->name('components.item');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
