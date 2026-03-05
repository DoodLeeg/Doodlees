<?php

use App\Http\Controllers\ArticleCotroller;
use App\Http\Controllers\OkakController;
use App\Http\Controllers\OtakController;
use App\Http\Controllers\UserController;
use App\Http\Controller\UseController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;

Route::get('/', function () {
    return ('!!!');
});
Route::get('/git/cnt', [PostController::class, 'show']);
Route::get('/git/{surname}/{name}', [Usecontroller::class, 'show']);
?>
