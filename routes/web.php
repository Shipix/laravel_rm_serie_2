<?php

use App\Http\Controllers\Page1Controller;
use App\Http\Controllers\Page2Controller;
use App\Http\Controllers\Page3Controller;
use App\Http\Controllers\Page4Controller;

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/page1', [Page1Controller::class, 'index'])->name('page1');

Route::get('/page2', [Page2Controller::class, 'index'])->name('page2');

Route::get('/page3', [Page3Controller::class, 'index'])->name('page3');

Route::get('/page4', [Page4Controller::class, 'index'])->name('page4');
