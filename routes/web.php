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

Route::get('/', 'HomeController@index')->name('home');
Route::post('/answer', 'AnswerController@index')->name('answer');
Route::post('/answer/advance', 'AnswerController@advance');


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
        Route::get('/quiz', 'System\QuizController@index');
        Route::get('/parts/of/speech', 'System\Parts\Of\SpeechController@index');
        Route::get('/admin', 'System\Admin\AdminController@index');
    });
});

// Route::get('/', 'QuizController@index');
// Route::post('/answer', 'AnswerController@index');
