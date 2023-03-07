<?php

use App\Http\Controllers\AboutusController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProgramController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home1Controller;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/homes', [Home1Controller::class, 'home'])->name('home1');

Route::prefix('product')->group(function(){
    Route::get('/marble-edu', [ProductController::class, 'marbel_edu'])->name('marble_edu');
    Route::get('/marble-and-friends-kids-games', [ProductController::class, 'marbel_friend'])->name('marble_friends');
    Route::get('/riri-story-books', [ProductController::class, 'riri_story'])->name('riri_story');
    Route::get('/kolak-kids-songs', [ProductController::class, 'kolak_songs'])->name('kolak_kids');
});

Route::prefix('program')->group(function(){
    Route::get('/karir', [ProgramController::class, 'karir'])->name('karir');
    Route::get('/magang', [ProgramController::class, 'magang'])->name('magang');
    Route::get('/kunjungan-kerja', [ProgramController::class, 'kunjungan'])->name('kunjungan');
});

Route::get('/aboutus', [AboutusController::class, 'about'])->name('about_us');

Route::get('/news/{id}', [NewsController::class, 'news'])->name('news');

Route::resource('contactus', ContactController::class);





