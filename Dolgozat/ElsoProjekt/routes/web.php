<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('bemutatkozas', function () {
    return view('bemutatkozas');
});

Route::get('bejelentkezes', function () {
    return view('bejelentkezes');
});

Route::get('felhasznlao', function () {
    return view('felhasznalo');
});

