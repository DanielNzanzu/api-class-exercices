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


/**
 *
 * dominos.co.ke
 * | / -> homepage
 * | orders -> ordersPage
 * | pizzas -> pizzasPage
 * | pay -> paymentPage
 *
 * GET(information retrieval) or POST (information update)
 * facade (front side of a building)
 */

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function () {
  echo "<h1>I think I get it!!!</h1>";
});

Route::get('about', function () {
  echo "<h1>About</h1>";
});

