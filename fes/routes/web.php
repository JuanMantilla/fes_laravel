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
    if (session('data')){
        return redirect('home');
    }
    else{
        return view('login_form');
    }

});

Route::get('/register', function () {
    return view('register');
});
Route::get('/home', function () {
    $routes = App\Route::all();
    return view('home')->with('routes', $routes);
})->name('home');

Route::post('/register', 'Auth\RegisterController@create');
Route::post('/buses', 'BusesController@create_from_route');
Route::post('/create_route', 'RoutesController@create');

Route::post('/login', 'Auth\LoginController@authenticate');
Route::post('/store_demand', 'DemandsController@store');
Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/register_new_admin', function () {
    return view('register_admin');
});


