<?php

/*----------------------------------------------------------
						Chat
----------------------------------------------------------*/
Route::group(['prefix' => '/messages'] , function () {
    Route::get('/', 'ChatControllers@index');
    Route::get('/{id}', 'ChatControllers@getOneByKey');
    Route::get('/check/{sender_id}/{receiver_id}', 'ChatControllers@getOne');
    Route::post('/with/{id}', 'ChatControllers@chatWith');
    Route::post('/{id}/newMessage', 'ChatControllers@newMessage');
	Route::post('/uploadAttachment', 'ChatControllers@uploadAttachment');
});