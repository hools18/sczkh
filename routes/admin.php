<?php
Route::group([
    'domain' => 'admin.'.env('APP_DOMAIN'),
    'as' => 'admin.',
    'namespace' => 'Admin',
    'middleware' => [
        'bindings',
//        'auth',
    ],
], function () {
    Route::get('/', [
        'as' => 'index',
        'uses' => 'MainController@index',
    ]);
    Route::get('/claim', [
        'as' => 'claim.index',
        'uses' => 'ClaimController@index',
    ]);
    Route::get('/user', [
        'as' => 'user.index',
        'uses' => 'UserController@index',
    ]);
    Route::get('/worker', [
        'as' => 'worker.index',
        'uses' => 'WorkerController@index',
    ]);
    Route::get('/country', [
        'as' => 'country.index',
        'uses' => 'CountryController@index',
    ]);
    Route::get('/city', [
        'as' => 'city.index',
        'uses' => 'CityController@index',
    ]);
    Route::group([
        'prefix' => 'region',
        'as' => 'region.',
    ], function () {
        Route::get('/', [
            'as' => 'index',
            'uses' => 'RegionController@index',
        ]);
        Route::post('/create', [
            'as' => 'create',
            'uses' => 'RegionController@create',
        ]);
    });
    Route::group([
        'prefix' => 'area',
        'as' => 'area.',
    ], function () {
        Route::get('/', [
            'as' => 'index',
            'uses' => 'AreaController@index',
        ]);
        Route::post('/create', [
            'as' => 'create',
            'uses' => 'AreaController@create',
        ]);
    });
    Route::group([
        'prefix' => 'category',
        'as' => 'category.',
    ], function () {
        Route::get('/', [
            'as' => 'index',
            'uses' => 'CategoryController@index',
        ]);
        Route::post('/create', [
            'as' => 'create',
            'uses' => 'CategoryController@create',
        ]);
    });
});
