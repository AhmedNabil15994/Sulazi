<?php 

/*----------------------------------------------------------
Shops
----------------------------------------------------------*/
Route::group(['prefix' => '/shops'] , function () {
    Route::get('/', 'ShopsControllers@index');
    Route::get('edit/{id}', 'ShopsControllers@edit');
    Route::post('update/{id}', 'ShopsControllers@update');
    Route::get('add', 'ShopsControllers@add');
    Route::post('create', 'ShopsControllers@create');
    Route::get('delete/{id}', 'ShopsControllers@delete');
});