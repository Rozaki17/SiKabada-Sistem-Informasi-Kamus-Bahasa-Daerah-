<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VocabController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\Routes;

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

Route::get('/', [Routes::class, 'showBeranda']);

Route::get('/register', [Routes::class, 'showRegister']);

Route::post('/register', [UserController::class, 'store']);

Route::get('/kamus', [Routes::class, 'showKamus']);
Route::post('/kamus', [VocabController::class, 'showKamus']);

Route::get('/event', [Routes::class, 'showEvent']);

Route::get('/event/{article:slug}', [ArticleController::class, 'getEventDetail']);

Route::get('/artikel', [Routes::class, 'showArtikel']);
Route::post('/artikel', [ArticleController::class, 'showArtikel']);

Route::get('/tentang-kami', [Routes::class, 'showTentangKami']);

Route::get('/add-event', [Routes::class, 'addEvent']);

Route::get('/pertanyaan', [Routes::class, 'addPertanyaan']);

Route::post('/register', [UserController::class, 'register']);