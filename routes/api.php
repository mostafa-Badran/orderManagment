<?php

// register
Route::post('/register', 'Api\AuthController@register');

// login
Route::post('/login', 'Api\AuthController@login');

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:api']], function () {
    // Permissions
    Route::apiResource('permissions', 'PermissionsApiController');

    // Roles
    Route::apiResource('roles', 'RolesApiController');

    // Users
    Route::apiResource('users', 'UsersApiController');

    // Products
    Route::apiResource('products', 'ProductsApiController');

    // Orders
    Route::apiResource('orders', 'OrdersApiController');
});
