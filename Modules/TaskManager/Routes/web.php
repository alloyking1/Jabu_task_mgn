<?php

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

use Modules\TaskManager\Http\Controllers\TaskManagerController;

Route::prefix('taskmanager')->group(function () {
    Route::get('/', [TaskManagerController::class, 'index'])->name('task.list');
});
