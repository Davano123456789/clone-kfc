<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KidsController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ProfileController;

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

Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('/', [AuthController::class, 'loginNow']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Client Routes
Route::middleware(['auth', 'onlyClient'])->group(function () {
    Route::get('/beranda', [AuthController::class, 'beranda'])->name('beranda');
    Route::get('/menu', [MenuController::class, 'menu'])->name('menu');
    Route::get('/menu/{id}', [MenuController::class, 'show'])->name('menu.show');
    Route::get('/news', [NewsController::class, 'news'])->name('news');
    Route::get('/event', [EventController::class, 'event'])->name('event');
    Route::get('/kids', [KidsController::class, 'kids'])->name('kids');
    Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
    Route::get('/detailProfile/{id}', [ProfileController::class, 'detailProfile'])->name('detailProfile');

});

// Admin Routes
Route::middleware(['auth', 'onlyAdmin'])->group(function () {
    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');

    // Menu Management
    Route::get('/listMenu', [MenuController::class, 'listMenu'])->name('listMenu');
    Route::get('/listDetailMenu/{id}', [MenuController::class, 'listDetailMenu'])->name('listDetailMenu');
    Route::get('/addData', [MenuController::class, 'addData'])->name('addData');
    Route::post('/addData', [MenuController::class, 'storeData'])->name('addData');
    Route::get('/deleteMenu/{id}', [MenuController::class, 'deleteMenu'])->name('deleteMenu');
    Route::get('/editMenu/{id}', [MenuController::class, 'editMenu'])->name('editMenu');
    Route::post('/editMenu/{id}', [MenuController::class, 'editedMenu'])->name('editMenu');

    // News Management
    Route::get('/listNews', [NewsController::class, 'listNews'])->name('listNews');
    Route::get('/addNews', [NewsController::class, 'addNews'])->name('addNews');
    Route::post('/addNews', [NewsController::class, 'storeNews'])->name('storeNews');
    Route::get('/deleteNews/{id}', [NewsController::class, 'deleteNews'])->name('deleteNews');
    Route::get('/detailNews/{id}', [NewsController::class, 'detailNews'])->name('detailNews');
    Route::get('/editNews/{id}', [NewsController::class, 'editNews'])->name('editNews');
    Route::post('/editNews/{id}', [NewsController::class, 'editedNews'])->name('editedNews');
    
    // event management
    Route::get('/listEvent', [EventController::class, 'listEvent'])->name('listEvent');
    Route::get('/addEvent', [EventController::class, 'addEvent'])->name('addEvent');
    Route::post('/addEvent', [EventController::class, 'storeEvent'])->name('storeEvent');
    Route::get('/deleteEvent/{id}', [EventController::class, 'deleteEvent'])->name('deleteEvent');
    Route::get('/editEvent/{id}', [EventController::class, 'editEvent'])->name('editEvent');
    Route::post('/editEvent/{id}', [EventController::class, 'editedEvent'])->name('editedEvent');
    
    
    // profile management
    Route::get('/listProfile', [ProfileController::class, 'listProfile'])->name('listProfile');
    Route::get('/addProfile', [ProfileController::class, 'addProfile'])->name('addProfile');
    Route::post('/addProfile', [ProfileController::class, 'storeProfile'])->name('storeProfile');
    Route::get('/deleteProfile/{id}', [ProfileController::class, 'deleteProfile'])->name('deleteProfile');

});