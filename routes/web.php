<?php

Route::get('/', function () {
    return view('welcome');
});

// Route::post('funcionarios', 'FuncionariosController@cadFunc')->name('cad.func');
Route::get('funcionarios', 'FuncionariosController@index')->name('funcionarios');

Route::post('departamentos', 'DepartamentosController@cadDepartamento')->name('cad.depart');
Route::get('departamentos', 'DepartamentosController@index')->name('cadastro.departamentos');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
