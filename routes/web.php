<?php

use Illuminate\Support\Facades\Route;


Route::view('/', 'pages.home');
Route::view('/overview', 'pages.overview');
Route::view('/matches', 'pages.matches');
Route::view('/status', 'pages.status');
Route::view('/table', 'pages.table');
