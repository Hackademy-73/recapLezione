<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

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
//Il punto d'entrata delle richieste lato client
Route::get('/', [PublicController::class, 'home'])->name('homePage');

Route::get('/contact-us', [PublicController::class, 'contactUs'])->name('contactUs');
Route::post('/send-mail', [PublicController::class, 'sendMail'])->name('sendMail');

//Rotte di gestione dell'articolo
Route::get('/create-article', [ArticleController::class, 'create'])->name('createArticle');
Route::post('/store-article', [ArticleController::class,  'store'])->name('storeArticle');
Route::get('/index-article', [ArticleController::class,  'index'])->name('indexArticle');
Route::get('/show-article/{article}', [ArticleController::class, 'show'])->name('showArticle');
Route::get('/edit-article/{article}', [ArticleController::class, 'edit'])->name('editArticle');
Route::put('/update-article/{article}', [ArticleController::class, 'update'])->name('updateArticle');
Route::delete('/update-article/{article}', [ArticleController::class, 'destroy'])->name('deleteArticle');