<?php
Route::group([
    'domain' => env('APP_DOMAIN'),
    'as' => 'front.',
    'namespace' => 'Front',
    'middleware' => [
        'bindings',
//        'auth',
    ],
], function () {
    Route::get('/', [
        'as' => 'main.index',
        'uses' => 'MainController@index',
    ]);
    Route::get('/claim', [
        'as' => 'claim.index',
        'uses' => 'ClaimController@index',
    ]);
    Route::any('/claim/form', [
        'as' => 'claim.form',
        'uses' => 'ClaimController@form',
    ]);
});
Route::group([
    'domain' => env('APP_DOMAIN'),
    'as' => 'auth.',
    'namespace' => 'Auth',
    'middleware' => [
        'bindings',
    ],
], function(){
    Route::any('/login', [
        'as' => 'login',
        'uses' => 'LoginController@login',
    ]);
    Route::any('/registation', [
        'as' => 'register',
        'uses' => 'LoginController@register',
    ]);
});

Route::group([
    'domain' => env('APP_DOMAIN'),
    'as' => 'api.',
    'prefix' => 'api',
    'namespace' => 'Api',
], function () {
    Route::get('/getCity', [
        'as' => 'city.get',
        'uses' => 'ApiController@getCity',
    ]);
    Route::get('/getCategory', [
        'as' => 'category.get',
        'uses' => 'ApiController@getCategory',
    ]);
    Route::get('/getArea', [
        'as' => 'area.get',
        'uses' => 'ApiController@getArea',
    ]);
    Route::get('/getClaim', [
        'as' => 'claim.get',
        'uses' => 'ApiController@getClaim',
    ]);

    Route::any('/sendClaim', [
        'as' => 'claim.send',
        'uses' => 'ApiController@sendClaim',
    ]);
    Route::any('/sendClaimJson', [
        'as' => 'claim.sendJson',
        'uses' => 'ApiController@sendClaimJson',
    ]);
});
Route::get('/home', 'HomeController@index')->name('home');
