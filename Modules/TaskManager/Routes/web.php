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
use Modules\TaskManager\Http\Livewire\LivewireTaskManagerController;

Route::prefix('taskmanager')->group(function () {
    // Route::view('/create', 'taskmanager::tasks.create')->name('task.create');
});
