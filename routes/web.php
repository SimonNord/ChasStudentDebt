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
//filter/search option for student
Route::get('/students', 'StudentController@index');

// search for student by string
Route::post('/students/search/', 'StudentController@search');

//list students for selected class
//Route::get('/students/{education}', 'StudentController@indexClass($education)');

//add new student
Route::get('/students/add', 'StudentController@create');
/*
//list search
Route::get('/student/list', 'StudentController@list');
//show student
Route::get('/student/list/{id}', 'StudentController@show');
*/

Route::get('/drinks', 'DrinkController@index');
Route::get('/drinksEdit', 'DrinkController@editDrink');
Route::get('/drinksEditDrink/{name}', 'DrinkController@editDrinkDrink');
Route::get('/drinksEditMade', 'DrinkController@editDrinkMade');
Route::get('/drinksAdd', 'DrinkController@addDrink');
Route::get('/drinksAddMade', 'DrinkController@addDrinkMade');
Route::get('/drinksRemove', 'DrinkController@removeDrink');
Route::get('/drinksRemoveMade/{name}', 'DrinkController@removeDrinkMade');

// New order form
Route::get('/order', 'OrderController@create');

// Create a new order and store it in the database
Route::get('/order/new', 'OrderController@store');

// Info about a specific order
Route::get('/order/{orderID}', 'OrderController@show');

// Shown after an order has been made
Route::get('/order/made/{orderID}', 'OrderController@orderMade');

Route::get('/history', 'HistoryController@index');

Route::post('/history', 'HistoryController@store');

Route::get('/history/{student_id}', 'HistoryController@show');

Route::get('/student/add', 'StudentController@create');
Route::get('/submit', 'StudentController@store');


