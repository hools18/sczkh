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
    Route::group([
        'prefix' => 'worker',
        'as' => 'worker.',
    ], function () {
        Route::get('/', [
            'as' => 'index',
            'uses' => 'WorkerController@index',
        ]);
        Route::put('/showForm', [
            'as' => 'showForm',
            'uses' => 'WorkerController@showForm',
        ]);
        Route::post('/create', [
            'as' => 'create',
            'uses' => 'WorkerController@create',
        ]);
        Route::put('/edit', [
            'as' => 'edit',
            'uses' => 'WorkerController@edit',
        ]);
        Route::post('/update', [
            'as' => 'update',
            'uses' => 'WorkerController@update',
        ]);
    });
    Route::group([
        'prefix' => 'role',
        'as' => 'role.',
    ], function () {
        Route::get('/', [
            'as' => 'index',
            'uses' => 'RoleController@index',
        ]);
        Route::put('/showForm', [
            'as' => 'showForm',
            'uses' => 'RoleController@showForm',
        ]);
        Route::post('/create', [
            'as' => 'create',
            'uses' => 'RoleController@create',
        ]);
        Route::put('/edit', [
            'as' => 'edit',
            'uses' => 'RoleController@edit',
        ]);
        Route::post('/update', [
            'as' => 'update',
            'uses' => 'RoleController@update',
        ]);
    });
    Route::group([
        'prefix' => 'city',
        'as' => 'city.',
    ], function () {
        Route::get('/', [
            'as' => 'index',
            'uses' => 'CityController@index',
        ]);
        Route::post('/create', [
            'as' => 'create',
            'uses' => 'CityController@create',
        ]);
    });
    Route::group([
        'prefix' => 'country',
        'as' => 'country.',
    ], function () {
        Route::get('/', [
            'as' => 'index',
            'uses' => 'CountryController@index',
        ]);
        Route::post('/create', [
            'as' => 'create',
            'uses' => 'CountryController@create',
        ]);
    });
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
        Route::put('/showForm', [
            'as' => 'showForm',
            'uses' => 'AreaController@showForm',
        ]);
        Route::post('/create', [
            'as' => 'create',
            'uses' => 'AreaController@create',
        ]);
        Route::put('/edit', [
            'as' => 'edit',
            'uses' => 'AreaController@edit',
        ]);
        Route::post('/update', [
            'as' => 'update',
            'uses' => 'AreaController@update',
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
