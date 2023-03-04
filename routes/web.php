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

Route::get( '/', function () {
    return view( 'welcome' );
} );

Route::get( 'hi', function () {

    $collection = collect( [
        'name' => 'Sally',
        'school' => 'Arkansas',
        'age' => 28,
    ] );


    $a = $collection->all() ;
    return gettype($a);

// ['name' => 'SALLY', 'school' => 'ARKANSAS', 'age' => '28'];

} );