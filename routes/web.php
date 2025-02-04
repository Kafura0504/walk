<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index ');
});

Route::get('/ADM/inputbuku', function () {
    return view('ADM.inputbuku ');
});
Route::get('/ADM/inputkategori', function () {
    return view('ADM.inputkategori ');
});
Route::get('/ADM/inputpenulis', function () {
    return view('ADM.inputpenulis ');
});
