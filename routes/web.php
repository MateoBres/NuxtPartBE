<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\ProductController;

use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // return Inertia::render('Welcome', [
    //     'canLogin' => Route::has('login'),
    //     'canRegister' => Route::has('register'),
    //     'laravelVersion' => Application::VERSION,
    //     'phpVersion' => PHP_VERSION,
    // ]);
    return redirect('/login');
});

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->name('dashboard');

// PROTECTED ROUTES
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');

    Route::get('/districts', [DisctrictController::class, 'index'])->name('districts.index');

    Route::get('/infos', [InfoController::class, 'index'])->name('infos.index');
    Route::post('/infos', [InfoController::class, 'store'])->name('info.store');
    Route::get('/infos/{info}/edit', [InfoController::class, 'edit'])->name('infos.edit');
    Route::put('/infos/{info}', [InfoController::class, 'update'])->name('infos.update');
    Route::delete('/infos/{info}', [InfoController::class, 'destroy'])->name('infos.destroy');

    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    Route::post('/products', [ProductController::class, 'store'])->name('product.store');
    Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');
    Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');


    Route::get('/district', function () {
        return Inertia::render('Districts');
    })->name('district');

    Route::get('/companies', function () {
        return Inertia::render('Companies');
    })->name('companies');

    Route::get('/projects', function () {
        return Inertia::render('Projects');
    })->name('projects');

    Route::get('/events', function () {
        return Inertia::render('Events');
    })->name('events');

    Route::get('/territories', function () {
        return Inertia::render('Territories');
    })->name('territories');

    Route::get('/recipes', function () {
        return Inertia::render('Recipes');
    })->name('recipes');

    Route::get('/values', function () {
        return Inertia::render('Values');
    })->name('values');

    Route::get('/media', [MediaController::class, 'index'])->name('media.index');
    Route::post('/media', [MediaController::class, 'store'])->name('media.store');
    Route::get('/media/{media}/edit', [MediaController::class, 'edit'])->name('media.edit');
    Route::post('/mediaedit/{media}', [MediaController::class, 'update'])->name('media.update');
    Route::delete('/media/{media}', [MediaController::class, 'destroy'])->name('media.destroy');
});
