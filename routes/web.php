<?php

use Illuminate\Support\Facades\Route;

route::get('/', function(){
return view('pages/home');
});

route::get('/about', function(){
    return view('pages/about');
});