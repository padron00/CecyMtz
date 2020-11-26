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

Route::get('/todos', [TodoController::class, 'IndexTodos']);

Route::get('/todos/mostrar/{todo}', [TodoController::class, 'ShowTodos'])->name('Todos.Show');


// Todos Admin

Route::get('admin/todos', [TodoController::class, 'Index'])->name('Todos.Index');

Route::get('admin/todos/agregar', [TodoController::class, 'Create'])->name('Todos.Create');
Route::post('admin/todos', [TodoController::class, 'Store'])->name('Todos.Store');

Route::get('admin/todos/mostrar/{todo}', [TodoController::class, 'Show'])->name('Todos.Show');

Route::get('admin/todos/editar/{todo}', [TodoController::class, 'Edit'])->name('Todos.Edit');
Route::put('admin/todos/{todo}', [TodoController::class, 'Update'])->name('Todos.Update');

Route::get('admin/todos/eliminar/{todo}', [TodoController::class, 'Delete'])->name('Todos.Delete');
Route::delete('admin/todos/{todo}', [TodoController::class, 'Destroy'])->name('Todos.Destroy');


// Independents Admin

Route::get('admin/independents', [IndependentController::class, 'Index'])->name('Independents.Index');

Route::get('admin/studios', [StudioController::class, 'Index'])->name('Studios.Index');

Route::get('admin/pendings', [PendingController::class, 'Index'])->name('Pendings.Index');

Route::get('admin/delivereds', [DeliveredController::class, 'Index'])->name('Delivereds.Index');


// Auth

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');