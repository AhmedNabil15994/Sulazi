<?php 

/*----------------------------------------------------------
Categories
----------------------------------------------------------*/
Route::group(['prefix' => '/categories'] , function () {
    Route::get('/', 'CategoryControllers@index');
    Route::get('edit/{id}', 'CategoryControllers@edit');
    Route::post('update/{id}', 'CategoryControllers@update');
    Route::get('add', 'CategoryControllers@add');
    Route::post('create', 'CategoryControllers@create');
    Route::get('delete/{id}', 'CategoryControllers@delete');
});