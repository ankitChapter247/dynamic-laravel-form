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

Route::redirect('/', '/front/form');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('forminformation', 'FormInformationController');
Route::resource('formfields', 'FormFieldController');
Route::get('/front/form','FrontController@index');
Route::get('front/currentForm/{form_information}','FrontController@currentForm')->name('front.currentForm');
Route::POST('front/userFormData/{form_information}','FrontController@store')->name('front.userFormData');

Route::get('formfields/currentForm/{form_information}','FormFieldController@currentForm')->name('formfields.currentForm');

Route::get('formfields/currentFormAjaxData/{form_information}','FormFieldController@currentFormAjaxData')->name('formfields.currentFormAjaxData');
