<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return 'Hello World!' ;
});

Route::get('/about', function () {
    return 'Venha nos conhecer!' ;
});

Route::get('/contato', function () {
    return 'Assine a newsletter!' ;
});


/*
get
post
put
patch
delete
options
*/