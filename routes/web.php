<?php


use App\Models\Admin;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    
    return view('welcome');

});
