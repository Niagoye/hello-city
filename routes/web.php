<?php

use Illuminate\Support\Facades\Route;

route::get('/', function(){
return view('pages/home');
})->name('home');

route::get('/about', function(){
    return view('pages/about');
})->name('about');