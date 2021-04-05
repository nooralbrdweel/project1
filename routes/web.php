<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request; 


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



Route::get('/about', function () {
    $name = 'ahmad';
    $age= 24;
    return view ('about')->with('name',$name)
    ->with('age', $age)
    ;
});


Route::post('/send' , function (Request $request) {
    $name = $request->myname;
    $age = $request->myage;

    return view ('about')->with('name',$name)->with('age', $age);
});

