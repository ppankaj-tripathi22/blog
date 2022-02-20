<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
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
//below link is for Yjara Datatable
//https://dev.to/sureshramani/laravel-8-server-side-datatables-tutorial-5dhd
Route::get('/', function () {
    return view('welcome');
});

Route::get('users', [UserController::class, 'index'])->name('users.index');//for yjara datatable

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

//Create Simple Route:
Route::get('simple-route', function () {
    return 'This is Simple Route Example of nicesnippets.com';
});
//call simple blade file
Route::view('/blog', 'employee_registration');
//Route::view('/blog', 'employee_registration', ['name' => 'nicesnippets']);

//controller
//Route::get('/employee', [EmployeeController::class, 'index']);
Route::get('/employee', 'App\Http\Controllers\EmployeeController@index');


/* in laravel 8 you need to use like
use App\Http\Controllers\SayhelloController;
Route::get('/users/{name?}' , [SayhelloController::class,'index']);
or

Route::get('/users', 'App\Http\Controllers\UserController@index'); */


/*
https://www.nicesnippets.com/blog/laravel-8-routing-example-tutorial
use App\Http\Controllers\UserController;
// UserController
Route::get('users', '[UserController::class, 'index']');
Route::post('users', '[UserController::class, 'post']');
Route::put('users/{id}', '[UserController::class, 'update']');
Route::delete('users/{id}', '[UserController::class, 'delete']');


*/
Route::get('users', [UserController::class, 'index']);//Route::get('add-student', [StudentController::class, 'create']);

Route::get('add-student',[StudentController::class, 'create']);
Route::post('add-student',[StudentController::class, 'store']);
Route::get('student',[StudentController::class,'index']);
Route::get('student_edit/{id}',[StudentController::class,'edit']);
Route::post('student_update',[StudentController::class,'update']);
Route::get('student_delete/{id}',[StudentController::class,'delete']);
