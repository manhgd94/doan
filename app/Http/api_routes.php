<?php
    
$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {

    //auth
    $api->post('auth/login', 'App\Api\V1\Controllers\AuthController@login');
    $api->post('auth/signup', 'App\Api\V1\Controllers\AuthController@signup');
    $api->post('auth/recovery', 'App\Api\V1\Controllers\AuthController@recovery');
    $api->post('auth/reset', 'App\Api\V1\Controllers\AuthController@reset');

    // example of protected route
    $api->get('protected', ['middleware' => ['api.auth'], function () {        
        return \App\User::all();
    }]);

    // example of free route
    $api->get('users', function() {
        return \App\User::all();
    });

    $api->get('count', 'App\Api\V1\Controllers\CountController@index');

    $api->group(['middleware' => 'api.auth'], function ($api) {
        $api->post('book/store', 'App\Api\V1\Controllers\BookController@store');
        $api->get('book', 'App\Api\V1\Controllers\BookController@index');
    });

    //book
    $api->group(['middleware' => 'api.auth'], function ($api) {
        $api->get('books', 'App\Api\V1\Controllers\BookController@index');
        $api->get('books/{id}', 'App\Api\V1\Controllers\BookController@show');
        $api->post('books', 'App\Api\V1\Controllers\BookController@store');
        $api->put('books/{id}', 'App\Api\V1\Controllers\BookController@update');
        $api->delete('books/{id}', 'App\Api\V1\Controllers\BookController@destroy');
    });

    //job
    $api->group(['prefix' => 'jobs'], function ($api) {
        $api->get('/',            ['as' => 'jobs.index',         'uses' => 'App\Api\V1\Controllers\JobController@index']);
        $api->get('/show/{id}',   ['as' => 'jobs.show',          'uses' => 'App\Api\V1\Controllers\JobController@show']);
        $api->get('/search/',     ['as' => 'jobs.search',        'uses' => 'App\Api\V1\Controllers\JobController@search']);

        $api->group(['middleware' => 'api.auth'], function ($api) {
            $api->post('',        ['as' => 'jobs.store',         'uses' => 'App\Api\V1\Controllers\JobController@store']);
            $api->put('/{id}',    ['as' => 'jobs.update',        'uses' => 'App\Api\V1\Controllers\JobController@update']);
            $api->delete('/{id}', ['as' => 'jobs.destroy',       'uses' => 'App\Api\V1\Controllers\JobController@destroy']);
        });      
    });

    //category
    $api->group(['prefix' => 'categories'], function ($api) {
        $api->get('/',            ['as' => 'categories.index',   'uses' => 'App\Api\V1\Controllers\CategoryController@index']);
        $api->get('/show/{id}',   ['as' => 'categories.show',    'uses' => 'App\Api\V1\Controllers\CategoryController@show']);

        $api->group(['middleware' => 'api.auth'], function ($api) {
            $api->post('',        ['as' => 'categories.store',   'uses' => 'App\Api\V1\Controllers\CategoryController@store']);
            $api->put('/{id}',    ['as' => 'categories.update',  'uses' => 'App\Api\V1\Controllers\CategoryController@update']);
            $api->delete('/{id}', ['as' => 'categories.destroy', 'uses' => 'App\Api\V1\Controllers\CategoryController@destroy']);
        });
    });

    //comment
    $api->group(['prefix' => 'comments'], function ($api) {
        $api->get('/',            ['as' => 'comments.index',     'uses' => 'App\Api\V1\Controllers\CommentController@index']);
        $api->get('/show/{id}',   ['as' => 'comments.show',      'uses' => 'App\Api\V1\Controllers\CommentController@show']);

        $api->group(['middleware' => 'api.auth'], function ($api) {
            $api->post('',        ['as' => 'comments.store',     'uses' => 'App\Api\V1\Controllers\CommentController@store']);
            $api->put('/{id}',    ['as' => 'comments.update',    'uses' => 'App\Api\V1\Controllers\CommentController@update']);
            $api->delete('/{id}', ['as' => 'comments.destroy',   'uses' => 'App\Api\V1\Controllers\CommentController@destroy']);
        });
    });

    //rate
    $api->group(['prefix' => 'rates'], function ($api) {
        $api->get('/',            ['as' => 'rates.index',        'uses' => 'App\Api\V1\Controllers\RateController@index']);
        $api->get('/show/{id}',   ['as' => 'rates.show',         'uses' => 'App\Api\V1\Controllers\RateController@show']);

        $api->group(['middleware' => 'api.auth'], function ($api) {
            // $api->post('',        ['as' => 'rates.store',        'uses' => 'App\Api\V1\Controllers\RateController@store']);
            $api->put('/{id}',    ['as' => 'rates.update',       'uses' => 'App\Api\V1\Controllers\RateController@update']);
            $api->delete('/{id}', ['as' => 'rates.destroy',      'uses' => 'App\Api\V1\Controllers\RateController@destroy']);
        });
    });

    //order
    $api->group(['prefix' => 'orders'], function ($api) {
        $api->get('/',            ['as' => 'orders.index',       'uses' => 'App\Api\V1\Controllers\OrderController@index']);
        $api->get('/show/{id}',   ['as' => 'orders.show',        'uses' => 'App\Api\V1\Controllers\OrderController@show']);

        $api->group(['middleware' => 'api.auth'], function ($api) {
            $api->post('',        ['as' => 'orders.store',       'uses' => 'App\Api\V1\Controllers\OrderController@store']);
            $api->put('/{id}',    ['as' => 'orders.update',      'uses' => 'App\Api\V1\Controllers\OrderController@update']);
            $api->delete('/{id}', ['as' => 'orders.destroy',     'uses' => 'App\Api\V1\Controllers\OrderController@destroy']);
        });
    });

});
