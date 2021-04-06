<?php

use App\Http\Controllers\CmsController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SecomController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [SiteController::class, 'index']);
Route::get('/secom', [SecomController::class, 'index']);
Route::get('/project/churrascometro', [ProjectController::class, 'churrascometro'])->name('project.churrascometro');

Route::get('/cms', [CmsController::class, 'index'])->name('cms.index');
Route::get('/cms/create', [CmsController::class, 'create'])->name('cms.create');
Route::post('/cms/store', [CmsController::class, 'store'])->name('cms.store');
Route::get('/cms/index', [CmsController::class, 'index'])->name('cms.index');
Route::put('/cms/{id}', [CmsController::class, 'update'])->name('cms.update');
Route::get('/cms/{id}/edit', [CmsController::class, 'edit'])->name('cms.edit');
Route::get('/cms/{id}/show', [CmsController::class, 'show'])->name('cms.show');
