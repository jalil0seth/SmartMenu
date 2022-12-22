<?php

Route::get('/', 'HomeController@index')->name('home');
Route::get('/fr', 'HomeController@fr')->name('fr');
Route::get('/ar', 'HomeController@ar')->name('ar');

Route::get('/last_order', 'HomeController@last_order')->name('last_order');

Route::get('/{lang}-cat{id}-{name}', 'HomeController@cat')->name('cat');

Route::get('/sendmail', 'HomeController@send_mail')->name('send_mail');

Route::get('/order', 'HomeController@order')->name('order');

Route::get('/track/{id}', 'HomeController@track')->name('track');
Route::post('/sendorder', 'HomeController@order_post')->name('order_post');

Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->to('admin.home');
});


Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'OrdersController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Categories
    Route::delete('categories/destroy', 'CategoriesController@massDestroy')->name('categories.massDestroy');
    Route::post('categories/media', 'CategoriesController@storeMedia')->name('categories.storeMedia');
    Route::post('categories/ckmedia', 'CategoriesController@storeCKEditorImages')->name('categories.storeCKEditorImages');
    Route::resource('categories', 'CategoriesController');
    Route::post('categories/reorder', 'CategoriesController@reorder')->name('categories.reorder');

    // Products
    Route::delete('products/destroy', 'ProductsController@massDestroy')->name('products.massDestroy');
    Route::post('products/media', 'ProductsController@storeMedia')->name('products.storeMedia');
    Route::post('products/ckmedia', 'ProductsController@storeCKEditorImages')->name('products.storeCKEditorImages');
    Route::resource('products', 'ProductsController');
    Route::post('products/reorder', 'ProductsController@reorder')->name('products.reorder');

    // Livreurs
    Route::delete('livreurs/destroy', 'LivreursController@massDestroy')->name('livreurs.massDestroy');
    Route::post('livreurs/media', 'LivreursController@storeMedia')->name('livreurs.storeMedia');
    Route::post('livreurs/ckmedia', 'LivreursController@storeCKEditorImages')->name('livreurs.storeCKEditorImages');
    Route::resource('livreurs', 'LivreursController');

    // Pages
    Route::delete('pages/destroy', 'PagesController@massDestroy')->name('pages.massDestroy');
    Route::post('pages/media', 'PagesController@storeMedia')->name('pages.storeMedia');
    Route::post('pages/ckmedia', 'PagesController@storeCKEditorImages')->name('pages.storeCKEditorImages');
    Route::resource('pages', 'PagesController');

    // Collection
    Route::delete('collections/destroy', 'CollectionController@massDestroy')->name('collections.massDestroy');
    Route::resource('collections', 'CollectionController');

    // Setting
    Route::delete('settings/destroy', 'SettingController@massDestroy')->name('settings.massDestroy');
    Route::post('settings/media', 'SettingController@storeMedia')->name('settings.storeMedia');
    Route::post('settings/ckmedia', 'SettingController@storeCKEditorImages')->name('settings.storeCKEditorImages');
    Route::resource('settings', 'SettingController');

    // Clients
    Route::delete('clients/destroy', 'ClientsController@massDestroy')->name('clients.massDestroy');
    Route::resource('clients', 'ClientsController');

    // Regions
    Route::delete('regions/destroy', 'RegionsController@massDestroy')->name('regions.massDestroy');
    Route::resource('regions', 'RegionsController');

    // Orders
    Route::delete('orders/destroy', 'OrdersController@massDestroy')->name('orders.massDestroy');
    Route::get('orders/filter/{status}', 'OrdersController@filter');
    Route::get('orders/livreur/{status}', 'OrdersController@livreur');
    Route::post('orders/changeOrder', 'OrdersController@changeit');
    
    Route::resource('orders', 'OrdersController');

    // Orderdetails
    Route::delete('orderdetails/destroy', 'OrderdetailsController@massDestroy')->name('orderdetails.massDestroy');
    Route::resource('orderdetails', 'OrderdetailsController');
});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
    // Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
        Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
        Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
    }
});
