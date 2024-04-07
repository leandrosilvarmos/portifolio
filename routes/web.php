<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('portifolio');
// });




Route::get('/', 'App\Http\Controllers\FeedbackController@index')->name('feedbacks.index');
Route::post('/feedback' , 'App\Http\Controllers\FeedbackController@CreateFeedback')->name('feedback');
Route::get('/portifolio', 'App\Http\Controllers\FeedbackController@index')->name('feedbacks.index');
