<?php

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

Route::get('/', function() {
    return redirect(env('APP_ROOT_REDIRECT', 'app.index'));
});

Route::group(['prefix' => 'app'], function () {
    Route::get('/', 'IndexController')->name('app.index');

    Route::get('cursos', 'CursoController@index')->name('cursos.index');
    Route::get('cursos/novo', 'CursoController@novo')->name('cursos.create');
    Route::post('cursos', 'CursoController@save')->name('cursos.store');
    Route::get('cursos/{curso}/editar', 'CursoController@editar')->name('cursos.edit');
    Route::put('cursos/{curso}', 'CursoController@save')->name('cursos.update');
    Route::delete('cursos/delete/{curso}', 'CursoController@delete')->name('cursos.delete');
    Route::delete('cursos/destroy/{curso}', 'CursoController@destroy')->name('cursos.destroy');
});
