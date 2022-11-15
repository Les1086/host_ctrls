<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Model\ENG;
/*
|--------------------------------------------------------------------------
|                               Web Routes
|--------------------------------------------------------------------------
*/
/* //PANTALLA DE INICIO
Route::get('/', function () {
    return view('welcome');
}); */

//LOGIN
Route::get('/', function () {
    return view('auth.login');
});
Auth::routes();

 Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); 

//STUDENT
    /* Route::get('main', function () {
        return view('main.main');
    })->name('main.main');
 */
//========================================================================
//ADMIN
Route::get('/admin',[Admin::class, 'index'])
     ->middleware('auth.admin')
     ->name('admin.index');
//ENG
Route::get('create-eng', function () {
    return view('admin.subjects.eng.create');
})->name('create-eng');

Route::get('read-eng', function () {
    return view('admin.subjects.eng.read');
})->name('read-eng');


Route::get('eng-create-panel', function () {
    return view('admin.subjects.eng.eng_create_panel');
})->name('eng-create-panel');

Route::get('eng-delete', function () {
    return view('admin.subjects.eng.eng-delete');
})->name('eng-delete');


Route::get('edit-eng', function () {
    return view('admin.subjects.eng.edit');
})->name('edit-eng');
  
//VAL

//ICT

