<?php
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\InputController;
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
?>
