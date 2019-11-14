<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/doctores','DoctorController@getAll');
Route::get('/Doctor/create','DoctorController@create');
Route::post('/Doctor/create','DoctorController@store');

Route::get('pacientes','PacienteController@getAll');
Route::get('/Paciente/create','PacienteController@create');
Route::post('/Paciente/create','PacienteController@store');

Route::get('/consultas','ConsultaController@getAll');
Route::get('/Consulta/create','ConsultaController@create');
Route::post('/Consulta/create','ConsultaController@store');

