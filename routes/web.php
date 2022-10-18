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
    return view('home');
})->name('homepage');

//Department con CRUD

//READ
// recupero elenco dei dipartimenti 
// Route::get('/departments', 'DepartmentController@index')->name('departments.index');
// // recupero un dipartimento in base alla chiave primaria 
// Route::get('/departmens/{id}', 'DepartmentController@show')->name('departments.show');
// // -_-_-_-_-_

// //CREATE
// //rotta visualizza la pagina con il form di creazione
// Route::get('/departments/create','DepartmentController@create')->name('departments.create');
// // salva una nuova risorsa con metodo post
// Route::post('/departments','DepartmentController@store')->name('departments.store');
// // -_-_-_-_-_


// //UPDATE è un copia e incolla del CREATE
// // Viusualizza form di edit della risorsa in base alla chiave primaria 
// Route::get('/departments/{id}/edit','DepartmentController@edit')->name('departments.edit');
// //aggiorna i dati della risorsa in base alla chiave primaria
// Route::put('/departments/{id}','DepartmentController@update')->name('departments.update');
// // -_-_-_-_-_


// // DELETE
// // elimina una risorsa in base alla chiave primaria
// Route::delete('/departments/{id}','DepartmentController@delete')->name('departments.destroy');

// TUTTE LE ROTTE PRECEDENTI RICREATE CON QUEST RIGA
Route::resource('departments','DepartmentController');
Route::resource('students','StudentController');