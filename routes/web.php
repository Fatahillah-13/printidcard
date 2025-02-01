<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/candidateList', function () {
    return view('candidateList');
});

Route::get('/newEmployeeList', function () {
    return view('newEmployeeList');
});
