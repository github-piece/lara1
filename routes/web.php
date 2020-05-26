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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('landing.home');
})->name('landing');

Auth::routes();

Route::get('/signalpay', function () {
    return view('user.signalpay');
})->name('signalpay');

Route::get('/levelpay', function () {
    return view('user.levelpay');
})->name('levelpay');

Route::get('/market', function () {
    return view('user.market');
})->name('market');

Route::get('/analytics', function () {
    return view('user.bigchart');
})->name('bigchart');

Route::get('/coverage', function () {
    return view('user.coverage');
})->name('coverage');

Route::get('/taxpay', function () {
    return view('user.taxpay');
})->name('taxpay');

Route::get('qr-code-g', function () {
  \QrCode::size(500)
            ->format('png')
            ->generate('ItSolutionStuff.com', public_path('images/qrcode.png'));
    
  return view('user.qrCode');
    
});


Route::post('/credit', 'CrudController@credit')->name('add');
Route::post('/change_level', 'CrudController@change_level')->name('change_level');
Route::post('/withdraw', 'CrudController@withdraw')->name('withdraw_result');

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::post('/update', 'ProfileController@updateProfile')->name('profile.update');


Route::post('/taxpay', 'CrudController@newtax')->name('newtaxpay');
Route::post('/levelpay', 'CrudController@newlevel')->name('newlevelpay');

Route::get('/adminboard', 'HomeController@admin')
	->middleware('admin')
	->name('admindash');
Route::get('/dashboard', 'HomeController@user')    
    ->middleware('user')    
    ->name('userdash');

Route::get('/history-del/{id}', 'CrudController@delHistory');
Route::get('/history-edit/{id}', 'CrudController@editHistory');
Route::get('/history-user/{id}', 'CrudController@userHistory');

Route::post('/update', 'CrudController@update')->name('update_history');

Route::get('/chat', 'HomeController@chat')->name('go_chat');
Route::get('/message/{id}', 'HomeController@getMessage')->name('message');
Route::post('message', 'HomeController@sendMessage');