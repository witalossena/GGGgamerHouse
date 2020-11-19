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
    return view('welcome');
});

Route::get('/organização', 'BlogController@show')->name('organização');
Route::get('/quem-somos-nos', 'EquipeController@index')->name('quemSomos');
Route::get('/blog', 'BlogController@index')->name('blog');

Route::prefix('classificação')->group(function () {
    Route::get('/serie-a', 'TabelaController@index')->name('serie_a');
    Route::get('/serie-b', 'TabelaController@tabelaSerieB')->name('serie_b');
    Route::get('/serie-c', 'TabelaController@tabelaSerieC')->name('serie_c');

});


Auth::routes();

Route::middleware('auth')->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/', 'AdminController@index')->name('admin');
        Route::get('/serie-a', 'AdminController@indexSerieA')->name('serieA');
        Route::get('/serie-b', 'AdminController@indexSerieB')->name('serieB');
        Route::get('/serie-c', 'AdminController@indexSerieC')->name('serieC');

        Route::get('/cadastrar-time', 'TeamController@create')->name('formTeamRegister');
        Route::post('/cadastrando-time', 'TeamController@store')->name('registerTeam');

        Route::get('/editar/time/{id}', 'TeamController@edit')->name('formTeamEdit');
        Route::put('/editando/time/{id}', 'TeamController@update')->name('updateTeam');
        Route::delete('/deletar/time/{id}', 'TeamController@destroy')->name('deleteTeam');

        Route::get('/organização', 'BlogController@org')->name('post');
        Route::put('/registrar/post-organização/{id}', 'BlogController@update')->name('updatePost');

        Route::get('/patrocinadores', 'PatrocinadorController@index')->name('patrocinadores');
        Route::post('/cadastrar-patrocinador', 'PatrocinadorController@store')->name('formPatrocinador');
        Route::delete('/deletando/patrocinador/{id}', 'PatrocinadorController@destroy')->name('deletePatrocinador');

        Route::get('/calendarios', 'CalendarioController@index')->name('calendar');
        Route::post('/registrar-calendario', 'CalendarioController@store')->name('formCalendar');
        Route::delete('/deletar/calendario/{id}', 'CalendarioController@destroy')->name('deleteCalendar');

        Route::get('/equipe-gggamerhouse', 'EquipeController@show')->name('formQuemSomos');
        Route::post('/equipe-gggamerhouse', 'EquipeController@store')->name('registerQuemSomos');
        Route::delete('/deletar/equipe-gggamerhouse/{id}', 'EquipeController@destroy')->name('deleteEquipe');


    });
});
