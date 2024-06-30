<?php

use App\Http\Controllers\ToDoListController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ToDoListController::class, 'index']);

Route::post('/saveItemRoute', [ToDoListController::class, 'saveItem'])->name('saveItem');

Route::post('/markCompleteRoute/{id}', [ToDoListController::class, 'markComplete'])->name('markComplete');
