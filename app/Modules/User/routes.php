<?php 

/*----------------------------------------------------------
Users
----------------------------------------------------------*/
Route::group(['prefix' => '/users'] , function () {
    Route::get('/', 'UsersControllers@index');
    Route::get('edit/{id}', 'UsersControllers@edit');
    Route::post('update/{id}', 'UsersControllers@update');
    Route::post('changeStatus/{id}', 'UsersControllers@changeStatus');
    Route::get('add', 'UsersControllers@add');
    Route::post('create', 'UsersControllers@create');
    Route::get('delete/{id}', 'UsersControllers@delete');
});