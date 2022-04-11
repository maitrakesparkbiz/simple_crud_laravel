<?php

use App\Http\Controllers\jobapplicationContoller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;
use App\Http\Middleware\ValidatSession;
use Illuminate\Support\Facades\Auth;

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


Route::get(
    'view/student',
    [studentController::class, 'show']
);
Route::group(['middleware' => ['admin']], function () {
Route::get(
    'add/student_form',
    [studentController::class, 'add_student']
);
Route::post('update/{id}',  [studentController::class, 'update_student']);
Route::get('delete/{id}',  [studentController::class, 'delete_student']);

});
Route::post(
    '/save',
    [studentController::class, 'save']
);

Route::get('edit/student_form/{id}',  [studentController::class, 'edit_student'])->middleware('session');


Route::get('error', function () {
return view('error.403_error');
});




Route::get(
    'check',
    [studentController::class, 'check']
);


Route::post(
    '/insertJobApp',
    [jobapplicationContoller::class, 'insert_jobApp']
);

Route::get('add/job_app',   [jobapplicationContoller::class, 'open_form']);
Route::get('grid/job_app',   [jobapplicationContoller::class, 'show_grid']);
Route::get('delete/job_app/{id}',  [jobapplicationContoller::class, 'delete_employee_details']);


Route::get('find/state/{id}',   [jobapplicationContoller::class, 'find_state']);
Route::get('find/city/{id}',   [jobapplicationContoller::class, 'find_city']);

Route::get('relation/many',   [jobapplicationContoller::class, 'relationship']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
