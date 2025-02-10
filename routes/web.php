<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\kategoriController;

Route::get('/', function () {
    return view('index ');
});

Route::get('/ADM/inputbuku', function () {
    return view('ADM.inputbuku ');
});
// Route::get('/ADM/inputkategori', function () {
//     return view('ADM.inputkategori ');
// });
Route::get('/ADM/inputpenulis', function () {
    return view('ADM.inputpenulis ');
});

Route::get('/ADM/inputkategori', [kategoriController::class,'index'])->name('ADM.inputkategori');
