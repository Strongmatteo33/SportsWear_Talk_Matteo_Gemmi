<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RevisorController;
use Illuminate\Support\Facades\Route;
use Laravel\Sail\Console\PublishCommand;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
Route::get('accedi', [PublicController::class, 'accedi'])->name('accedi');
Route::get('registrati', [PublicController::class, 'registrati'])->name('registrati');
Route::get('careers', [PublicController::class, 'careers'])->name('careers');
Route::post('careers/submit', [PublicController::class, 'careersSubmit'])->name('careers.submit');


Route::get('create', [ArticleController::class, 'create'])->name('create');
Route::post('store', [ArticleController::class, 'store'])->name('store');
Route::get('index', [ArticleController::class, 'index'])->name('index');
Route::get('show{article}', [ArticleController::class, 'show'])->name('show');
Route::get('article.category{category}', [ArticleController::class, 'byCategory'])->name('article.byCategory');
Route::get('article.editor{editor}', [ArticleController::class, 'byEditor'])->name('article.byEditor');



Route::middleware('admin')->group(function(){
    Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
});
Route::middleware('admin')->group(function(){
    Route::get('admin/{user}/set-admin', [AdminController::class, 'setAdmin'])->name('admin.setAdmin');
});
Route::middleware('admin')->group(function(){
    Route::get('admin/{user}/set-revisor', [AdminController::class, 'setRevisor'])->name('admin.setRevisor');
});
Route::middleware('admin')->group(function(){
    Route::get('admin/{user}/set-writer', [AdminController::class, 'setWriter'])->name('admin.setWriter');
});



Route::middleware('revisor')->group (function(){
    Route::get('revisor/dashboard', [RevisorController::class, 'dashboard'])->name('revisor.dashboard');
});
Route::middleware('revisor')->group(function(){
    Route::get('revisor/{article}/accept', [RevisorController::class, 'acceptArticle'])->name('revisor.acceptArticle');
});
Route::middleware('revisor')->group(function(){
    Route::get('revisor/{article}/reject', [RevisorController::class, 'rejectArticle'])->name('revisor.rejectArticle');
});
Route::middleware('revisor')->group(function(){
    Route::get('revisor/{article}/undo', [RevisorController::class, 'undoArticle'])->name('revisor.undoArticle');
});
