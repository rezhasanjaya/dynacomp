<?php

use App\Http\Controllers\Admin\ArticleCategoryController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\ContactMessageController;
use App\Http\Controllers\Admin\ProjectCategoryController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ServicesMasterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Landing\AboutController;
use App\Http\Controllers\Landing\ContactController;
use App\Http\Controllers\Landing\HomeController;
use App\Http\Controllers\Landing\NewsController;
use App\Http\Controllers\Landing\ServicesController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
    
// });
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/articles', [NewsController::class, 'index'])->name('articles');
Route::get('/articles/read/{uuid}', [NewsController::class, 'read'])->name('articles.read');

// Route::get('/dashboard', function () {return view('dashboard');})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth','verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::prefix('project-categories')->group(function () {
        Route::get('/', [ProjectCategoryController::class, 'index'])->name('project-categories.index');
        Route::get('/create', [ProjectCategoryController::class, 'create'])->name('project-categories.create');
        Route::post('/store', [ProjectCategoryController::class, 'store'])->name('project-categories.store');
        Route::get('/edit/{uuid}', [ProjectCategoryController::class, 'edit'])->name('project-categories.edit');
        Route::put('/update/{uuid}', [ProjectCategoryController::class, 'update'])->name('project-categories.update');
        Route::delete('/destroy/{uuid}', [ProjectCategoryController::class, 'destroy'])->name('project-categories.destroy');
    });

    Route::prefix('article-categories')->group(function () {
        Route::get('/', [ArticleCategoryController::class, 'index'])->name('article-categories.index');
        Route::get('/create', [ArticleCategoryController::class, 'create'])->name('article-categories.create');
        Route::post('/store', [ArticleCategoryController::class, 'store'])->name('article-categories.store');
        Route::get('/edit/{uuid}', [ArticleCategoryController::class, 'edit'])->name('article-categories.edit');
        Route::put('/update/{uuid}', [ArticleCategoryController::class, 'update'])->name('article-categories.update');
        Route::delete('/destroy/{uuid}', [ArticleCategoryController::class, 'destroy'])->name('article-categories.destroy');
    });

    Route::resource('article', ArticleController::class);
    Route::get('/contact-messages', [ContactMessageController::class, 'index'])->name('contact-messages.index');
    Route::get('/contact-messages/{id}', [ContactMessageController::class, 'show'])->name('contact-messages.show');
    Route::delete('/contact-messages/{id}', [ContactMessageController::class, 'destroy'])->name('contact-messages.destroy');

    Route::resource('project', ProjectController::class);
    
    Route::prefix('project')->group(function () {
        Route::get('/', [ProjectController::class, 'index'])->name('project.index');
        Route::get('/create', [ProjectController::class, 'create'])->name('project.create');
        Route::post('/store', [ProjectController::class, 'store'])->name('project.store');
        Route::get('/edit/{uuid}', [ProjectController::class, 'edit'])->name('project.edit');
        Route::put('/update/{uuid}', [ProjectController::class, 'update'])->name('project.update');
        Route::delete('/destroy/{uuid}', [ArticleCategoryController::class, 'destroy'])->name('article-categories.destroy');
    });
});

require __DIR__.'/auth.php';
