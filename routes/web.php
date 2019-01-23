<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });
    Route::group(['middleware' => ['auth', 'get-user']], function () {
        Route::get('/', 'HomeController@index')->name('home');
        Route::get('/user/edit', 'UserController@updateUser')->name('user-edit');
        Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

        Route::prefix('optics')->group(function () {
            Route::get('/', 'OpticController@index')->name('optic-index');
            Route::get('/create', 'OpticController@create')->name('optic-create');
            Route::post('/', 'OpticController@store')->name('optic-store');
            Route::get('/{id}/edit', 'OpticController@update')->name('optic-update');
            Route::put('/{id}', 'OpticController@edit')->name('optic-edit');
        });

        Route::prefix('recipes')->group(function () {
            Route::get('/', 'RecipeController@index')->name('recipe-index');
            Route::get('/create', 'RecipeController@create')->name('recipe-create');
            Route::post('/', 'RecipeController@store')->name('recipe-store');
            Route::get('/{id}/edit', 'RecipeController@update')->name('recipe-update');
            Route::put('/{id}', 'RecipeController@edit')->name('recipe-edit');
        });

        Route::prefix('config')->group(function () {
            Route::get('/optic', 'ConfigurationController@opticIndex')->name('config-optics');
            Route::put('/optic/{id}', 'ConfigurationController@opticUpdate')->name('config-optic-update');
            Route::get('/brands', 'ConfigurationController@brandIndex')->name('config-brands');
            Route::get('/brands/create', 'ConfigurationController@brandCreate')->name('config-brand-form');
            Route::post('/brands/create', 'ConfigurationController@brandStore')->name('config-brand-store');
            Route::get('/brands/{id}', 'ConfigurationController@brandUpdate')->name('config-brand-update');
            Route::put('/brands/{id}', 'ConfigurationController@brandEdit')->name('config-brand-edit');
            Route::delete('/brands/{id}', 'ConfigurationController@brandDelete')->name('config-brand-delete');
            Route::get('/types', 'ConfigurationController@typeIndex')->name('config-types');
            Route::get('/types/create', 'ConfigurationController@typeCreate')->name('config-type-form');
            Route::post('/types/create', 'ConfigurationController@typeStore')->name('config-type-store');
            Route::get('/types/{id}', 'ConfigurationController@typeUpdate')->name('config-type-update');
            Route::put('/types/{id}', 'ConfigurationController@typeEdit')->name('config-type-edit');
            Route::delete('/types/{id}', 'ConfigurationController@typeDelete')->name('config-type-delete');
            Route::get('/users', 'ConfigurationController@userIndex')->name('config-users');
            Route::get('/users/create', 'ConfigurationController@userCreate')->name('config-user-form');
            Route::post('/users/create', 'ConfigurationController@userStore')->name('config-user-store');
            Route::get('/users/{id}', 'ConfigurationController@userUpdate')->name('config-user-update');
            Route::put('/users/{id}', 'ConfigurationController@userEdit')->name('config-user-edit');
            Route::delete('/users/{id}', 'ConfigurationController@userDelete')->name('config-user-delete');
        });

        Route::prefix('products')->group(function () {
            Route::get('/', 'ProductController@index')->name('product-index');
            Route::get('/create', 'ProductController@create')->name('product-create');
            Route::post('/', 'ProductController@store')->name('product-store');
            Route::get('/{id}/edit', 'ProductController@update')->name('product-update');
            Route::put('/{id}', 'ProductController@edit')->name('product-edit');
            Route::get('/id/{id}', 'ProductController@getById');
            Route::get('/search/{query}', 'ProductController@search')->name('product-search');
        });

        Route::prefix('sales')->group(function () {
            Route::get('/', 'BudgetController@index')->name('sales-index');
            Route::get('/create', 'BudgetController@create')->name('sales');
            Route::post('/', 'BudgetController@store')->name('sales-store');
            Route::get('/{id}/edit', 'BudgetController@update')->name('sales-update');
            Route::put('/{id}', 'BudgetController@edit')->name('sales-edit');
        });
    });
});