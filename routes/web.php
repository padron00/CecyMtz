<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

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

Route::get('/admin/', function () {
    return view('welcomeAdmin');
});

// Todos User

Route::get('/todos', 'TodoController@TodoStore')->name('TodoStore');

//Route::get('/todos', 'TodoController@TodoStore')->name('TodoStore');
//Route::get('/todos', 'TodoController@Index');
//Route::get('/todos', [TodoController::class, 'TodoStore']);
//Route::get('/users', [UserController::class, 'index']);

// Todos Admin

Route::get('admin/todos', [TodoController::class, 'Index'])->name('Todos.Index');

Route::get('admin/todos/agregar', [TodoController::class, 'Index'])->name('Todos.Create');
Route::post('admin/todos', [TodoController::class, 'Index'])->name('Todos.Store');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');