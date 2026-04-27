<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', fn () => Inertia::render('Welcome'))->name('home');

Route::get('dashboard', fn () => Inertia::render('Dashboard'))->middleware(['auth', 'verified'])->name('dashboard');

Route::get('components', fn () => Inertia::render('Components'))->name('components');

Route::get('components/avatar', fn () => Inertia::render('components/Avatar'))->name('components.avatar');

Route::get('components/item', fn () => Inertia::render('components/Item'))->name('components.item');

Route::get('components/kbd', fn () => Inertia::render('components/Kbd'))->name('components.kbd');

Route::get('components/button', fn () => Inertia::render('components/Button'))->name('components.button');

Route::get('components/spinner', fn () => Inertia::render('components/Spinner'))->name('components.spinner');

Route::get('components/command', fn () => Inertia::render('components/Command'))->name('components.command');

Route::get('components/badge', fn () => Inertia::render('components/Badge'))->name('components.badge');

Route::get('components/breadcrumb', fn () => Inertia::render('components/Breadcrumb'))->name('components.breadcrumb');

Route::get('components/card', fn () => Inertia::render('components/Card'))->name('components.card');

Route::get('components/checkbox', fn () => Inertia::render('components/Checkbox'))->name('components.checkbox');

Route::get('components/collapsible', fn () => Inertia::render('components/Collapsible'))->name('components.collapsible');

Route::get('components/dialog', fn () => Inertia::render('components/Dialog'))->name('components.dialog');

Route::get('components/dropdown-menu', fn () => Inertia::render('components/DropdownMenu'))->name('components.dropdown-menu');

Route::get('components/input', fn () => Inertia::render('components/Input'))->name('components.input');

Route::get('components/label', fn () => Inertia::render('components/Label'))->name('components.label');

Route::get('components/navigation-menu', fn () => Inertia::render('components/NavigationMenu'))->name('components.navigation-menu');

Route::get('components/pin-input', fn () => Inertia::render('components/PinInput'))->name('components.pin-input');

Route::get('components/progress', fn () => Inertia::render('components/Progress'))->name('components.progress');

Route::get('components/separator', fn () => Inertia::render('components/Separator'))->name('components.separator');

Route::get('components/sheet', fn () => Inertia::render('components/Sheet'))->name('components.sheet');

Route::get('components/sidebar', fn () => Inertia::render('components/Sidebar'))->name('components.sidebar');

Route::get('components/skeleton', fn () => Inertia::render('components/Skeleton'))->name('components.skeleton');

Route::get('components/input-group', fn () => Inertia::render('components/InputGroup'))->name('components.input-group');

Route::get('components/alert-dialog', fn () => Inertia::render('components/AlertDialog'))->name('components.alert-dialog');

Route::get('components/button-group', fn () => Inertia::render('components/ButtonGroup'))->name('components.button-group');

Route::get('components/carousel', fn () => Inertia::render('components/Carousel'))->name('components.carousel');

Route::get('components/chart', fn () => Inertia::render('components/Chart'))->name('components.chart');

Route::get('components/context-menu', fn () => Inertia::render('components/ContextMenu'))->name('components.context-menu');

Route::get('components/empty', fn () => Inertia::render('components/Empty'))->name('components.empty');

Route::get('components/field', fn () => Inertia::render('components/Field'))->name('components.field');

Route::get('components/form', fn () => Inertia::render('components/Form'))->name('components.form');

Route::get('components/hover-card', fn () => Inertia::render('components/HoverCard'))->name('components.hover-card');

Route::get('components/select', fn () => Inertia::render('components/Select'))->name('components.select');

Route::get('components/combobox', fn () => Inertia::render('components/Combobox'))->name('components.combobox');

Route::get('components/radio-group', fn () => Inertia::render('components/RadioGroup'))->name('components.radio-group');

Route::get('components/switch', fn () => Inertia::render('components/Switch'))->name('components.switch');

Route::get('components/toggle', fn () => Inertia::render('components/Toggle'))->name('components.toggle');

Route::get('components/toggle-group', fn () => Inertia::render('components/ToggleGroup'))->name('components.toggle-group');

Route::get('components/tags-input', fn () => Inertia::render('components/TagsInput'))->name('components.tags-input');

Route::get('components/scroll-area', fn () => Inertia::render('components/ScrollArea'))->name('components.scroll-area');

Route::get('components/sonner', fn () => Inertia::render('components/Sonner'))->name('components.sonner');

Route::get('components/stepper', fn () => Inertia::render('components/Stepper'))->name('components.stepper');

Route::get('components/table-component', fn () => Inertia::render('components/TableComponent'))->name('components.table-component');

Route::get('components/tabs-component', fn () => Inertia::render('components/TabsComponent'))->name('components.tabs-component');

Route::get('custom-components', fn () => Inertia::render('CustomComponents'))->name('custom-components');

Route::get('custom-components/timeline', fn () => Inertia::render('custom-components/Timeline'))->name('custom-components.timeline');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
