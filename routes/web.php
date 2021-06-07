<?php

use GuzzleHttp\Middleware;
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

Auth::routes([
    'register' => false,
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/questionnaires/create', 'QuestionnaireController@create')->middleware('auth');
Route::post('/questionnaires', 'QuestionnaireController@store')->middleware('auth');
Route::get('/exit', 'QuestionnaireController@exit');


Route::get('/questionnaires/{questionnaire}', 'QuestionnaireController@show')->middleware('auth');
Route::get('/questionnaires/{questionnaire}/questions/create', 'QuestionController@create')->middleware('auth'); 
Route::post('/questionnaires/{questionnaire}/questions', 'QuestionController@store');
Route::delete('/questionnaires/{questionnaire}/questions/{question}', 'QuestionController@destroy')->middleware('auth');
Route::get('/surveys/{questionnaire}-{slug}', 'SurveyController@show');
Route::post('/surveys/{questionnaire}-{slug}', 'SurveyController@store');
