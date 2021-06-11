<?php

use Illuminate\Routing\RouteGroup;
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
    return view('covid');
});

Route::get('/projeto', function () {
    return view('covid');
});



Route::get('paciente', array('as' => 'paciente', 'uses' =>'PacienteController@paciente'));
Route::post('paciente', 'PacienteController@postPaciente');

Route::get('/paciente', 'PacienteController@paciente');

Route::group(['prefix'=> 'paciente'], function (){
Route::get('/covid','PacienteController@covid')->name('paciente.covid');
Route::get('/cadastrar','PacienteController@cadastrar')->name('paciente.cadastrar');
Route::get('/queixa','PacienteController@queixa')->name('paciente.queixa');
Route::post('/queixa','PacienteController@criarQueixa')->name('paciente.queixa.criar'); 
Route::get('/informar','PacienteController@informar')->name('paciente.informar');
Route::get('/opinar','PacienteController@opinar')->name('paciente.opinar');
Route::get('/sobre','PacienteController@sobre')->name('paciente.sobre');
Route::get('/finalizar','PacienteController@finalizar')->name('paciente.finalizar');
Route::get('/login','PacienteController@login')->name('paciente.login');
Route::get('/logar','loginController@login')->name('login');

});