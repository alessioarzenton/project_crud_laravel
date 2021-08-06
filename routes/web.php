<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\WelcomeController;
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

//WELCOME
Route::get('/', [WelcomeController::class, 'welcome'])->name('welcome');


//? CRUD - ARTICLE
//CRUD - sezione CREATE
Route::get('/nuovo-articolo', [ArticleController::class, 'create'])->name('articles.create');
Route::post('/salva-articolo', [ArticleController::class, 'store'])->name('articles.store');

//CRUD - sezione READ
Route::get('/visualizza-articoli', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/visualizza-articoli/{article}', [ArticleController::class, 'show'])->name('articles.show');

//CRUD - sezione UPDATE
Route::get('/modifica-articolo/{article}', [ArticleController::class, 'edit'])->name('articles.edit');
Route::put('/salva-articolo-modificato/{article}', [ArticleController::class, 'update'])->name('articles.update');

//CRUD - sezione DELETE
Route::delete('/elimina-articolo/{article}', [ArticleController::class, 'delete'])->name('articles.delete');



//? CRUD - CAR
//CRUD - sezione CREATE
Route::get('/nuova-macchina', [CarController::class, 'create'])->name('cars.create');
Route::post('/salva-macchina', [CarController::class, 'store'])->name('cars.store');

//CRUD - sezione READ
Route::get('/visualizza-macchine', [CarController::class, 'index'])->name('cars.index');
Route::get('/visualizza-macchine/{car}', [CarController::class, 'show'])->name('cars.show');

//CRUD - sezione UPDATE
Route::get('/modifica-macchina/{car}', [CarController::class, 'edit'])->name('cars.edit');
Route::put('/salva-macchina-modificata/{car}', [CarController::class, 'update'])->name('cars.update');

//CRUD - sezione DELETE
Route::delete('/elimina-macchina/{car}', [CarController::class, 'delete'])->name('cars.delete');
