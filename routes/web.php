<?php

use App\Http\Controllers\ArticleCotroller;
use App\Http\Controllers\OkakController;
use App\Http\Controllers\OtakController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;

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

Route::get('/', function () {
    return ('!!!');
});
// Задачи по artisan и путям контроллера
Route::get('/name/all', [UserController::class, 'show']);

Route::get('user/{name}', [OkakController::class, 'show']);

Route::get('user/{Surname}/{Name}', [OtakController::class, 'show']);

// Массив данных имен и городов задача A
?>
