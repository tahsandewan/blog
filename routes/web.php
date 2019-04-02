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

Route::get('/home', function () {
	return view('home');
});

Route::get('/profile', function () {
	return view('profile');
});
Route::get('/general', function () {
	return view('general');
});
Route::get('/philips', function () {
	return view('philips');
});
Route::get('/philips_hairdryer', function () {
	return view('philips_hairdryer');
});
Route::get('/store', function () {
	return view('store');
});
Route::get('/locator', function () {
	return view('locator');
});
Route::get('/registration', function () {
	return view('registration');
});
Route::get('/login', function () {
	return view('login');
});
Route::get('/trimmer', function () {
	return view('trimmer');
});
Route::get('/straightener', function () {
	return view('straightener');
});
Route::get('/wall', function () {
	return view('wall');
});
Route::get('/ceiling', function () {
	return view('ceiling');
});
Route::get('/cassette', function () {
	return view('cassette');
});
Route::get('/sharp', function () {
	return view('sharp');
});
Route::get('/blender', function () {
	return view('blender');
});
Route::get('/cooker', function () {
	return view('cooker');
});
Route::get('/pot', function () {
	return view('pot');
});
Route::get('/studentinfo', function () {
	return view('studentinfo');
});