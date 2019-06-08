<?php
Route::group([
    'domain' => 'www.'.env('APP_DOMAIN'),
    'as' => 'front.',
    'namespace' => 'Api'
], function () {
    Route::get('/', function (){
        return 1;
    });
    Route::get('/getCategory', [
        'as' => 'city.get',
        'uses' => 'ApiController@getCategory',
    ]);
});
