<?php

/*----------------------------------------------------------
Dashboard
----------------------------------------------------------*/
Route::group(['prefix' => '/dashboard'] , function () {
    Route::get('/', 'DashboardControllers@Dashboard');
    Route::post('/getChartData', 'DashboardControllers@getChartData');
	Route::post('/language', 'DashboardControllers@changeLang');
});