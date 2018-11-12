<?php



Route::group([
//    'middleware' => 'acl',
    'namespace' => 'BackEnd\Posts',
    'prefix' => '/posts'

], function() {

    // Route::resource('', 'PostsContrller');
    
    Route::get('', ['uses' => 'PostsContrller@index', 'as' => 'posts.index']);

    Route::get('create', ['uses' => 'PostsContrller@create', 'as' => 'posts.create']);

    Route::post('', ['uses' => 'PostsContrller@store', 'as' => 'posts.store']);

    Route::get('show/{id}', ['uses' => 'PostsContrller@show', 'as' => 'posts.show']);

    Route::get('edit/{id}', ['uses' => 'PostsContrller@edit', 'as' => 'posts.edit']);

    Route::put('update/{id}', ['uses' => 'PostsContrller@update', 'as' => 'posts.update']);

    Route::post('destroy/{id}', ['uses' => 'PostsContrller@destroy', 'as' => 'posts.destroy']);

    
});