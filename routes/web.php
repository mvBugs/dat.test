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

//Route::get('/', 'Front\HomeController@index')->name('home');


/**
 * Admin routes.
 */
Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth'/*, 'permission:dashboard.read'*/]], function () {
    Route::get('/', 'HomeController@home')->name('home');

    Route::get('account', 'AccountController@edit')->name('account.edit');
    Route::patch('account', 'AccountController@update')->name('account.update');

    Route::group(['namespace' => 'Taxonomy'], function () {
        Route::resource('terms', 'TermController', ['except' => ['show']]);
        Route::post('terms/order', 'TermController@order')->name('terms.order');
        Route::get('terms/autocomplete', 'TermController@autocomplete')->name('terms.autocomplete');
        Route::get('terms/treeselect', 'TermController@treeselect')->name('terms.treeselect');
        Route::get('terms/treeview', 'TermController@treeview')->name('terms.treeview');
    });

    Route::group(['namespace' => 'Menu'], function () {
        Route::resource('menu', 'MenuController', ['except' => ['show']]);
        Route::resource('menu-items', 'MenuItemController');
        Route::post('menu-items/order', 'MenuItemController@order')->name('menu-items.order');
    });

    Route::group([], function () {
        Route::get('forms', 'FormController@index')->name('forms.index');;
        Route::delete('forms/{id}', 'FormController@destroy')->name('forms.destroy');
        Route::post('form/{id}/editable', 'FormController@editable')->name('forms.editable');
        Route::match(['POST', 'GET'], 'forms/{id}/status', 'FormController@status')->name('forms.status'); // TODO only POST!
    });

    Route::resource('users', 'UserController', ['except' => ['show']]);

    Route::get('variables', 'VariableController@forms')->name('variable.forms');
    Route::post('variables', 'VariableController@save')->name('variable.save');
    Route::get('cache-clear', 'ServiceController@cache')->name('service.cache-clear');

    Route::resource('nodes', 'NodeController');
    Route::resource('items', 'ItemsController');
    Route::resource('blocks', 'BlockController');
    Route::post('blocks/visual', 'BlockController@visualSave')->name('blocks.visual');
});

/**
 * Front routes.
 */
Route::group(['namespace' => 'Front'], function () {
    //Route::get('pages/{page}', 'PageController@show');
    Route::get('/sendmesssage', function () {
        return view('fronts.pages.write-end');
    })->name('write.end');
    Route::get('node/{node}', 'NodeController@show')->name('node.show');
    Route::post('form', 'FormController@store')->name('form.store');
    Route::get('/{locale?}', 'HomeController@index')->name('home')->middleware('applyUrlLocaleToRootPage');
});

/**
 * This is start page for users.
 */
Route::get('start', function (\Illuminate\Http\Request $request) {
    if ($request->user()->hasRole('admin') || $request->user()->hasPermissionTo('dashboard.home.read')) {
        return redirect()->route('admin.home');
    } elseif ($request->user()->hasPermissionTo('client-account.read')) {
        return redirect()->route('account.edit');
    }
    return redirect()->to('/');
})->name('start')->middleware('auth');