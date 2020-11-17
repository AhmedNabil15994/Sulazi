<?php

/*----------------------------------------------------------
Home
----------------------------------------------------------*/
Route::group(['prefix' => '/'] , function () {
    Route::get('/', 'HomeControllers@index');
    Route::get('/first', 'HomeControllers@first');
    Route::any('/second', 'HomeControllers@second');
    Route::any('/third', 'HomeControllers@third');
    Route::any('/fourth', 'HomeControllers@fourth');
    Route::any('/fifth', 'HomeControllers@fifth');
    Route::any('/sixth', 'HomeControllers@sixth');
    Route::get('/boxes', 'HomeControllers@boxes');
    Route::get('/getStarted', 'HomeControllers@getStarted');
    Route::get('/contactUs', 'HomeControllers@contactUs');
    Route::get('/details', 'HomeControllers@details');
    Route::get('/press', 'HomeControllers@press');
    Route::get('/prices', 'HomeControllers@prices');
    Route::get('/faqs', 'HomeControllers@faqs');
    Route::get('/giftCard', 'HomeControllers@giftCard');
    Route::any('/uploadPage', 'HomeControllers@uploadPage');
    Route::post('/uploadFiles', 'HomeControllers@uploadFiles');
    Route::get('/boxDetails/{id}', 'HomeControllers@boxDetails');
    Route::any('/questionnaire', 'HomeControllers@questionnaire');
    Route::get('/process', 'HomeControllers@process');
    Route::get('/shipping', 'HomeControllers@shipping');
    Route::get('/info', 'HomeControllers@info');
    Route::get('/payment', 'HomeControllers@payment');
	Route::post('/language', 'DashboardControllers@changeLang');
});
