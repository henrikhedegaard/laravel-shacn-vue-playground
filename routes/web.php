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

Route::get('components/kbd', function () {
    return Inertia::render('components/Kbd');
})->name('components.kbd');

Route::get('components/button', function () {
    return Inertia::render('components/Button');
})->name('components.button');

Route::get('components/spinner', function () {
    return Inertia::render('components/Spinner');
})->name('components.spinner');

Route::get('components/command', function () {
    return Inertia::render('components/Command');
})->name('components.command');

Route::get('components/badge', function () {
    return Inertia::render('components/Badge');
})->name('components.badge');

Route::get('components/breadcrumb', function () {
    return Inertia::render('components/Breadcrumb');
})->name('components.breadcrumb');

Route::get('components/card', function () {
    return Inertia::render('components/Card');
})->name('components.card');

Route::get('components/checkbox', function () {
    return Inertia::render('components/Checkbox');
})->name('components.checkbox');

Route::get('components/collapsible', function () {
    return Inertia::render('components/Collapsible');
})->name('components.collapsible');

Route::get('components/dialog', function () {
    return Inertia::render('components/Dialog');
})->name('components.dialog');

Route::get('components/dropdown-menu', function () {
    return Inertia::render('components/DropdownMenu');
})->name('components.dropdown-menu');

Route::get('components/input', function () {
    return Inertia::render('components/Input');
})->name('components.input');

Route::get('components/label', function () {
    return Inertia::render('components/Label');
})->name('components.label');

Route::get('components/navigation-menu', function () {
    return Inertia::render('components/NavigationMenu');
})->name('components.navigation-menu');

Route::get('components/pin-input', function () {
    return Inertia::render('components/PinInput');
})->name('components.pin-input');

Route::get('components/progress', function () {
    return Inertia::render('components/Progress');
})->name('components.progress');

Route::get('components/separator', function () {
    return Inertia::render('components/Separator');
})->name('components.separator');

Route::get('components/sheet', function () {
    return Inertia::render('components/Sheet');
})->name('components.sheet');

Route::get('components/sidebar', function () {
    return Inertia::render('components/Sidebar');
})->name('components.sidebar');

Route::get('components/skeleton', function () {
    return Inertia::render('components/Skeleton');
})->name('components.skeleton');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
