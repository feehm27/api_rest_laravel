<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/ok', function(){

return ['status' => true];

});

Route::namespace('API')->name('api')->group(function(){

	
	Route::prefix('/funcionarios')->group(function(){

	/* Chamada a function de inserção de registros na classe FuncionarioController*/
	  Route::post('/create', 'FuncionarioController@insert')->name('create_funcionarios');
   
    /* Chamada a function de atualização na classe FuncionarioController */

      Route::post('/update/{id}','FuncionarioController@update')->name('update_funcionario'); 

    /* Chamada a function de deleção na classe FuncionarioController */

      Route::post('/destroy/{id}','FuncionarioController@delete')->name('delete_funcionario');

    /* Chamada a function de listagem por "ID" na classe FuncionarioController */
	  Route::get('/show/{id}', 'FuncionarioController@showid')->name('show_funcionarios');

	/* Chamada a function de listagem na classe FuncionarioController */
      Route::get('/list', 'FuncionarioController@list')->name('list_funcionarios');

    }); 

});
