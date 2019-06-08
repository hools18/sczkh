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
    Route::get('/region', [
        'as' => 'region.index',
        'uses' => 'RegionController@index',
    ]);
    Route::get('/area', [
        'as' => 'area.index',
        'uses' => 'AreaController@index',
    ]);
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
