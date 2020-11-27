<?php

use Illuminate\Support\Facades\Route;

route::get('/', function(){
return view('home');
});

route::get('/about', function(){
    return view('about');
});