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


Route::prefix('system/admin')->group(function () {
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('logout');

    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('register', 'Auth\RegisterController@register');

    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');
});

Route::middleware(['auth'])->group(function () {
    Route::prefix('system/admin')->group(function () {
        Route::get('/', 'System\AdminController@index')->name('system/admin');
        // Route::get('admin/admin','AdminController@index');
        // Route::get('admin/create','AdminController@index');
        // Route::post('admin/create','AdminController@create');
        // Route::get('admin/edit/{id}','AdminController@index');
        // Route::put('admin/edit/{id}','AdminController@update');
        // Route::put('admin/admin','AdminController@index');
        // Route::get('quiz/create','QuizController@index');
        // Route::post('quiz/create','QuizController@index');
        // Route::get('/','AdminController@index');
    });
});




// Route::prefix('system/admin')->group(function () {
    // $this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
    // $this->post('login', 'Auth\LoginController@login');
    // $this->post('logout', 'Auth\LoginController@logout')->name('logout');
// });

// Route::group(['middleware' => ['auth'],'prifex' => 'system/admin'], function () {
//     Route::get('/','AdminController@index');
// });
