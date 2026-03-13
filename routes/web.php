<?php
use App\Http\Controllers\ArticleCotroller;
use App\Http\Controllers\OkakController;
use App\Http\Controllers\OtakController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Usecontroller;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\Maketscontroller;


Route::get('/', function () {
    return ('!!!');
});
// Z1

Route::get('/git/cnt', [PostController::class, 'show']);
// Z2

Route::get('/git/cn/{surname}/{name}', [Usecontroller::class, 'show']);

// Z3

Route::get('/git/fv/{Fruit}/{Milk}', [OtakController::class, 'show']);

// Z4

Route::get('/git/title/slot', [Maketscontroller::class, 'show']);

// Z7 

Route::get('/git/users', [ArticleCotroller::class, 'show'])->name('Users.Names');
Route::get('/git/surname', [ArticleCotroller::class, 'sur'])->name('Users.Surnames');
Route::get('/git/ages', [ArticleCotroller::class, 'age'])->name('Users.Ages');

// Z8
?>
