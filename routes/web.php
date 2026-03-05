<?php

use App\Http\Controllers\ArticleCotroller;
use App\Http\Controllers\OkakController;
use App\Http\Controllers\OtakController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;

Route::get('/', function () {
    return ('!!!');
});
Route::get('/name/all', [UserController::class, 'show']);
Route::get('user/{name}', [OkakController::class, 'show']);
Route::get('user/{Surname}/{Name}', [OtakController::class, 'show']);
Route::get('user/Git',[POSTController::class<'show']);

?>
