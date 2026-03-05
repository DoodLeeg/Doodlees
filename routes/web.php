<?php
use App\Http\Controllers\ArticleCotroller;
use App\Http\Controllers\OkakController;
use App\Http\Controllers\OtakController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Usecontroller;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;

Route::get('/', function () {
    return ('!!!');
});
// Z1

Route::get('/git/cnt', [PostController::class, 'show']);
// Z2

Route::get('/git/{surname}/{name}', [Usecontroller::class, 'show']);

// Z3

Route::get('/git/{Fruit}/{Milk}', [OtakController::class, 'show']);

// Z4

?>
