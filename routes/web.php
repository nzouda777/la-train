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

Route::get('/', function () {
    $first_name = 'Rodrigue';
    $last_name = 'MASTER';
    // $datas = [
    //     'firstName' => $first_name,
    //     'lastName' => $last_name
    // ];
    // return view('welcome', $datas);
    #another way to pass data to the view

    return view('welcome', compact('last_name', 'first_name'));
});
Route::get('/about', function () {
    return view('pages.about');
    #return View::make('pages.about');
});
Route::get('/help', function() {
    return view('pages.help');
});
Route::get('/events', function(){
    $events = [
        'se reveiller',
        'manger',
        'coder',
        'dormir',
        'repeat'
    ];
    return view('events.index', compact('events'));
});
