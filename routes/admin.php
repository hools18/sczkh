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
    Route::get('/user', [
        'as' => 'user.index',
        'uses' => 'UserController@index',
    ]);
    Route::group([
        'prefix' => 'user',
        'as' => 'user.',
    ], function () {
        Route::get('/', [
            'as' => 'index',
            'uses' => 'UserController@index',
        ]);
        Route::put('/edit', [
            'as' => 'edit',
            'uses' => 'UserController@edit',
        ]);
        Route::post('/update', [
            'as' => 'update',
            'uses' => 'UserController@update',
        ]);
    });
    Route::group([
        'prefix' => 'claim',
        'as' => 'claim.',
    ], function () {
        Route::get('/', [
            'as' => 'index',
            'uses' => 'ClaimController@index',
        ]);
        Route::put('/showForm', [
            'as' => 'showForm',
            'uses' => 'ClaimController@showForm',
        ]);
        Route::post('/transferArea', [
            'as' => 'transferArea',
            'uses' => 'ClaimController@transferArea',
        ]);
    });

    Route::group([
        'prefix' => 'claim_area',
        'as' => 'claim_area.',
    ], function () {
        Route::get('/', [
            'as' => 'showArea',
            'uses' => 'ClaimController@showArea',
        ]);
        Route::put('/showForm', [
            'as' => 'showFormArea',
            'uses' => 'ClaimController@showFormArea',
        ]);
        Route::post('/transferWorker', [
            'as' => 'transferWorker',
            'uses' => 'ClaimController@transferWorker',
        ]);
    });
    Route::group([
        'prefix' => 'claim_worker',
        'as' => 'claim_worker.',
    ], function () {
        Route::get('/', [
            'as' => 'showWorker',
            'uses' => 'ClaimController@showWorker',
        ]);
        Route::put('/showForm', [
            'as' => 'showFormWorker',
            'uses' => 'ClaimController@showFormWorker',
        ]);
    });
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
        Route::put('/showForm', [
            'as' => 'showForm',
            'uses' => 'CityController@showForm',
        ]);
        Route::post('/create', [
            'as' => 'create',
            'uses' => 'CityController@create',
        ]);
        Route::put('/edit', [
            'as' => 'edit',
            'uses' => 'CityController@edit',
        ]);
        Route::post('/update', [
            'as' => 'update',
            'uses' => 'CityController@update',
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
        Route::put('/showForm', [
            'as' => 'showForm',
            'uses' => 'RegionController@showForm',
        ]);
        Route::post('/create', [
            'as' => 'create',
            'uses' => 'RegionController@create',
        ]);
        Route::put('/edit', [
            'as' => 'edit',
            'uses' => 'RegionController@edit',
        ]);
        Route::post('/update', [
            'as' => 'update',
            'uses' => 'RegionController@update',
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
        Route::put('/showForm', [
            'as' => 'showForm',
            'uses' => 'CategoryController@showForm',
        ]);
        Route::post('/create', [
            'as' => 'create',
            'uses' => 'CategoryController@create',
        ]);
        Route::put('/edit', [
            'as' => 'edit',
            'uses' => 'CategoryController@edit',
        ]);
        Route::post('/update', [
            'as' => 'update',
            'uses' => 'CategoryController@update',
        ]);
        Route::delete('/delete', [
            'as' => 'delete',
            'uses' => 'CategoryController@delete',
        ]);
    });
});
