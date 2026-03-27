<?php
use App\Http\Controllers\CityController;
use App\Http\Controllers\MassController;
use App\Http\Controllers\RabotController;
use App\Http\Controllers\STDAController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\InputController;
use App\Http\Controllers\TextController;
use App\Http\Controllers\DataController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ('!!!');
});
// Z1

Route::get('/git/{name}/{age}/{salary}', [UsersController::class, 'show'])->name('Worker.Worker');

// Z2

Route::get('/git/{color}',  [ColorController::class, 'css']);

// Z3 

Route::get('/git/cnt/input', [InputController::class,'inputt']);

// Z5

Route::get('/git/t/text', [TextController::class,'text']);

// Z6

Route::get('/git/time/data',[DataController::class,'data']);

// Z7

Route::get('/git/w/Rabot', [RabotController::class,'Rabot']);

// Z8

Route::get('/git/mas/massive', [MassController::class,'mas']);

// Z9

Route::get('/git/c/city', [CityController::class,'city']);

// Z10

Route::get('/git/s/trd', [STDAController::class, 'std']);

// Z12


?>
