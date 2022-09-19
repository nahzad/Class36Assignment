<?php


use Illuminate\Support\Facades\Route;
//------------------------------------------------------------

Route::get('/', [App\Http\Controllers\Admin\MasterController::class, 'dashboard']);

/* Route::get('users', [App\Http\Controllers\Admin\UsersController::class, 'index']);

Route::get('users/create', [App\Http\Controllers\Admin\UsersController::class, 'create']);

Route::post('users/store', [App\Http\Controllers\Admin\UsersController::class, 'store']);

Route::get('users/edit/{id}', [App\Http\Controllers\Admin\UsersController::class, 'edit']);

Route::post('users/update/{id}', [App\Http\Controllers\Admin\UsersController::class, 'update']); */

/**
 * Using group controller system
 */

Route::controller(App\Http\Controllers\Admin\UsersController::class)->group(function () {
    Route::get('users', 'index')->name('users.index');
    Route::get('users/create', 'create')->name('users.create');
    Route::post('users/store', 'store')->name('users.store');
    Route::get('users/edit/{id}', 'edit')->name('users.edit');
    Route::post('users/update/{id}', 'update')->name('users.update');
    Route::get('users/delete/{id}', 'destroy')->name('users.destroy');
});

// Resouce Route for BlogCategory

Route::resource('blogCategory', App\Http\Controllers\Admin\BlogCategoryController::class);
Route::resource('blogs', App\Http\Controllers\Admin\BlogController::class);