<?php


use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['guest']], function() {
    Route::get('/logout', 'LoginController@logout')->name('logout');
    Route::get('/login', 'LoginController@showLoginForm')->name('login');
    Route::post('/login', 'LoginController@login')->name('login');
    Route::get('/register', 'RegisterController@showRegistrationForm')->name('register');
    Route::post('/register', 'RegisterController@register')->name('register');
    Route::post('/password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('/password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('/password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.update');
    Route::get('/password/reset/{token}', 'ForgotPasswordController@showResetForm')->name('password.reset');
});
Route::get('/logout-manual', function(){
    request()->session()->invalidate();
});


