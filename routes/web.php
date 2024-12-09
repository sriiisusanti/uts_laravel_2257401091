<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome'); // Halaman awal
});

Route::get('/register', function () {
    return view('register');
});

Route::post('/register', function () {
    return redirect('/login');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', function () {
    return redirect('/home');
});

Route::get('/home', function () {
    $data = [
        'nim' => '2257401086',
        'name' => 'Mohammad Ismi',
        'class' => 'MI22A'
    ];
    return view('home', $data);
});

Route::get('/logout', function () {
    return redirect('/');
});


Route::get('/', function () {
    return view('welcome');
});