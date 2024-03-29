<?php

use Illuminate\Support\Facades\Route;

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
    return redirect()->to('login');
});
/*

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});
*/
Route::resource('autos', 'App\Http\Controllers\AutoController');  
Route::resource('todolist', 'App\Http\Controllers\ToDoListController'); 
Route::resource('tareas', 'App\Http\Controllers\TareaController'); 

Route::post('todolist/eliminar', 'App\Http\Controllers\ToDoListController@eliminarTarea');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
