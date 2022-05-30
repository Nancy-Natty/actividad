<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
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
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function(){
    Route::get('login', [AdminController::class, 'login'])->name('login');
    Route::get('index', [AdminController::class, 'index'])->name('index');
    Route::get('flot', [AdminController::class, 'flot'])->name('flot');
    Route::get('morris', [AdminController::class, 'morris'])->name('morris');
    Route::get('timeline', [AdminController::class, 'timeline'])->name('timeline');
    Route::get('tables', [AdminController::class, 'tables'])->name('tables');
    Route::get('forms', [AdminController::class, 'forms'])->name('forms');
    Route::get('panelswells', [AdminController::class, 'panelswells'])->name('panelswells');
    Route::get('grid', [AdminController::class, 'grid'])->name('grid');
    Route::get('notifications', [AdminController::class, 'notifications'])->name('notifications');
    Route::get('typography', [AdminController::class, 'typography'])->name('typography');
    Route::get('buttons', [AdminController::class, 'buttons'])->name('buttons');
    Route::get('blank', [AdminController::class, 'blank'])->name('blank');
});

