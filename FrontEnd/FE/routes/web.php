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

Route::get('/', 'App\Http\Controllers\HomeController@index');
Route::get('/about', 'App\Http\Controllers\HomeController@about');
Route::get('/contact', 'App\Http\Controllers\HomeController@contactus');
Route::get('/login', function () {
    return view('login');
});
Route::get('/faqs', function () {
    return view('faqs');
});
Route::get('/safeevent', function () {
    return view('safeevent');
});

Route::get('/register', function () {
    return view('register');
});
Route::get('/space', 'App\Http\Controllers\HomeController@space');
Route::get('/meeting', 'App\Http\Controllers\HomeController@meeting');
Route::get('/halls', 'App\Http\Controllers\HomeController@halls');
Route::get('/parties', 'App\Http\Controllers\HomeController@parties');
Route::get('/playground', 'App\Http\Controllers\HomeController@playground');
Route::get('/training', 'App\Http\Controllers\HomeController@training');
Route::get('/professional', 'App\Http\Controllers\HomeController@professional');
Route::get('/unusual', 'App\Http\Controllers\HomeController@unusual');
Route::get('/wedding', 'App\Http\Controllers\HomeController@wedding');
Route::get('/offsite', 'App\Http\Controllers\HomeController@offsite');

Route::get('/meeting/detail/{id}', 'App\Http\Controllers\HomeController@meeting_detail');
Route::get('/halls/detail/{id}', 'App\Http\Controllers\HomeController@halls_detail');
Route::get('/parties/detail/{id}', 'App\Http\Controllers\HomeController@parties_detail');
Route::get('/playground/detail/{id}', 'App\Http\Controllers\HomeController@playground_detail');
Route::get('/training/detail/{id}', 'App\Http\Controllers\HomeController@training_detail');
Route::get('/professional/detail/{id}', 'App\Http\Controllers\HomeController@professional_detail');
Route::get('/unusual/detail/{id}', 'App\Http\Controllers\HomeController@unusual_detail');
Route::get('/wedding/detail/{id}', 'App\Http\Controllers\HomeController@wedding_detail');
Route::get('/offsite/detail/{id}', 'App\Http\Controllers\HomeController@offsite_detail');

Route::post('/meeting/detail/message', 'App\Http\Controllers\HomeController@venueContact');
Route::post('/halls/detail/message', 'App\Http\Controllers\HomeController@venueContact');
Route::post('/parties/detail/message', 'App\Http\Controllers\HomeController@venueContact');
Route::post('/playground/detail/message', 'App\Http\Controllers\HomeController@venueContact');
Route::post('/training/detail/message', 'App\Http\Controllers\HomeController@venueContact');
Route::post('/professional/detail/message', 'App\Http\Controllers\HomeController@venueContact');
Route::post('/unusual/detail/message', 'App\Http\Controllers\HomeController@venueContact');
Route::post('/wedding/detail/message', 'App\Http\Controllers\HomeController@venueContact');
Route::post('/offsite/detail/message', 'App\Http\Controllers\HomeController@venueContact');

Route::post('/meeting_search', 'App\Http\Controllers\SearchController@meeting_search');
Route::post('/halls_search', 'App\Http\Controllers\SearchController@halls_search');
Route::post('/parties_search', 'App\Http\Controllers\SearchController@parties_search');
Route::post('/playground_search', 'App\Http\Controllers\SearchController@playground_search');
Route::post('/training_search', 'App\Http\Controllers\SearchController@training_search');
Route::post('/professional_search', 'App\Http\Controllers\SearchController@professional_search');
Route::post('/unusual_search', 'App\Http\Controllers\SearchController@unusual_search');
Route::post('/wedding_search', 'App\Http\Controllers\SearchController@wedding_search');
Route::post('/offsite_search', 'App\Http\Controllers\SearchController@offsite_search');

Route::post('/message', 'App\Http\Controllers\HomeController@contact');
Route::post('/search_space', 'App\Http\Controllers\SearchController@search_space');
