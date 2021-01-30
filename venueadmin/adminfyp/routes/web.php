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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin/signup', function () {
    return view('signup');
});
Route::post('/admin/signupprc', 'HomeController@loginaccess');



/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function () {
        Route::prefix('admin-users')->name('admin-users/')->group(static function () {
            Route::get('/',                                             'AdminUsersController@index')->name('index');
            Route::get('/create',                                       'AdminUsersController@create')->name('create');
            Route::post('/',                                            'AdminUsersController@store')->name('store');
            Route::get('/{adminUser}/impersonal-login',                 'AdminUsersController@impersonalLogin')->name('impersonal-login');
            Route::get('/{adminUser}/edit',                             'AdminUsersController@edit')->name('edit');
            Route::post('/{adminUser}',                                 'AdminUsersController@update')->name('update');
            Route::delete('/{adminUser}',                               'AdminUsersController@destroy')->name('destroy');
            Route::get('/{adminUser}/resend-activation',                'AdminUsersController@resendActivationEmail')->name('resendActivationEmail');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function () {
        Route::get('/profile',                                      'ProfileController@editProfile')->name('edit-profile');
        Route::post('/profile',                                     'ProfileController@updateProfile')->name('update-profile');
        Route::get('/password',                                     'ProfileController@editPassword')->name('edit-password');
        Route::post('/password',                                    'ProfileController@updatePassword')->name('update-password');
    });
});



/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::prefix('types')->name('types/')->group(static function() {
            Route::get('/',                                             'TypeController@index')->name('index');
            Route::get('/create',                                       'TypeController@create')->name('create');
            Route::post('/',                                            'TypeController@store')->name('store');
            Route::get('/{type}/edit',                                  'TypeController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'TypeController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{type}',                                      'TypeController@update')->name('update');
            Route::delete('/{type}',                                    'TypeController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::prefix('sub-types')->name('sub-types/')->group(static function() {
            Route::get('/',                                             'SubTypeController@index')->name('index');
            Route::get('/create',                                       'SubTypeController@create')->name('create');
            Route::post('/',                                            'SubTypeController@store')->name('store');
            Route::get('/{subType}/edit',                               'SubTypeController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'SubTypeController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{subType}',                                   'SubTypeController@update')->name('update');
            Route::delete('/{subType}',                                 'SubTypeController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::prefix('venues')->name('venues/')->group(static function() {
            Route::get('/',                                             'VenuesController@index')->name('index');
            Route::get('/create',                                       'VenuesController@create')->name('create');
            Route::post('/',                                            'VenuesController@store')->name('store');
            Route::get('/{venue}/edit',                                 'VenuesController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'VenuesController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{venue}',                                     'VenuesController@update')->name('update');
            Route::delete('/{venue}',                                   'VenuesController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::prefix('contacts')->name('contacts/')->group(static function() {
            Route::get('/',                                             'ContactController@index')->name('index');
            Route::get('/create',                                       'ContactController@create')->name('create');
            Route::post('/',                                            'ContactController@store')->name('store');
            Route::get('/{contact}/edit',                               'ContactController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'ContactController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{contact}',                                   'ContactController@update')->name('update');
            Route::delete('/{contact}',                                 'ContactController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::prefix('contactvenues')->name('contactvenues/')->group(static function() {
            Route::get('/',                                             'ContactvenueController@index')->name('index');
            Route::get('/create',                                       'ContactvenueController@create')->name('create');
            Route::post('/',                                            'ContactvenueController@store')->name('store');
            Route::get('/{contactvenue}/edit',                          'ContactvenueController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'ContactvenueController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{contactvenue}',                              'ContactvenueController@update')->name('update');
            Route::delete('/{contactvenue}',                            'ContactvenueController@destroy')->name('destroy');
        });
    });
});