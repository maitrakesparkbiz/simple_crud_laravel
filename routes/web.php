<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;
use App\Http\Middleware\ValidatSession;
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

Route::get('/', function () {
    return view('welcome');
});

Route::any(
    'view/student',
    [studentController::class, 'show']
);

/* Route::get(
    '/insert/student',
    [studentController::class, 'setdata']
); */


Route::get(
    'add/student_form',
    [studentController::class, 'add_student']
);

Route::post(
    '/save',
    [studentController::class, 'save']
);

Route::get('edit/student_form/{id}',  [studentController::class, 'edit_student']);

Route::post('update/{id}',  [studentController::class, 'update_student']);
Route::get('delete/{id}',  [studentController::class, 'delete_student']);


