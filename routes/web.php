<?php

use Illuminate\Support\Facades\Route;

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


/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('admin-users')->name('admin-users/')->group(static function() {
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
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::get('/profile',                                      'ProfileController@editProfile')->name('edit-profile');
        Route::post('/profile',                                     'ProfileController@updateProfile')->name('update-profile');
        Route::get('/password',                                     'ProfileController@editPassword')->name('edit-password');
        Route::post('/password',                                    'ProfileController@updatePassword')->name('update-password');
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('products')->name('products/')->group(static function() {
            Route::get('/',                                             'ProductController@index')->name('index');
            Route::get('/create',                                       'ProductController@create')->name('create');
            Route::post('/',                                            'ProductController@store')->name('store');
            Route::get('/{product}/edit',                               'ProductController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'ProductController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{product}',                                   'ProductController@update')->name('update');
            Route::delete('/{product}',                                 'ProductController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('planta')->name('planta/')->group(static function() {
            Route::get('/',                                             'PlantaController@index')->name('index');
            Route::get('/create',                                       'PlantaController@create')->name('create');
            Route::post('/',                                            'PlantaController@store')->name('store');
            Route::get('/{plantum}/edit',                               'PlantaController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'PlantaController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{plantum}',                                   'PlantaController@update')->name('update');
            Route::delete('/{plantum}',                                 'PlantaController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('empleados')->name('empleados/')->group(static function() {
            Route::get('/',                                             'EmpleadoController@index')->name('index');
            Route::get('/create',                                       'EmpleadoController@create')->name('create');
            Route::post('/',                                            'EmpleadoController@store')->name('store');
            Route::get('/{empleado}/edit',                              'EmpleadoController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'EmpleadoController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{empleado}',                                  'EmpleadoController@update')->name('update');
            Route::delete('/{empleado}',                                'EmpleadoController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('ubicacions')->name('ubicacions/')->group(static function() {
            Route::get('/',                                             'UbicacionController@index')->name('index');
            Route::get('/create',                                       'UbicacionController@create')->name('create');
            Route::post('/',                                            'UbicacionController@store')->name('store');
            Route::get('/{ubicacion}/edit',                             'UbicacionController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'UbicacionController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{ubicacion}',                                 'UbicacionController@update')->name('update');
            Route::delete('/{ubicacion}',                               'UbicacionController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('detalles')->name('detalles/')->group(static function() {
            Route::get('/',                                             'DetalleController@index')->name('index');
            Route::get('/create',                                       'DetalleController@create')->name('create');
            Route::post('/',                                            'DetalleController@store')->name('store');
            Route::get('/{detalle}/edit',                               'DetalleController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'DetalleController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{detalle}',                                   'DetalleController@update')->name('update');
            Route::delete('/{detalle}',                                 'DetalleController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('inventarios')->name('inventarios/')->group(static function() {
            Route::get('/',                                             'InventarioController@index')->name('index');
            Route::get('/create',                                       'InventarioController@create')->name('create');
            Route::post('/',                                            'InventarioController@store')->name('store');
            Route::get('/{inventario}/edit',                            'InventarioController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'InventarioController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{inventario}',                                'InventarioController@update')->name('update');
            Route::delete('/{inventario}',                              'InventarioController@destroy')->name('destroy');
        });
    });
});