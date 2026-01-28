<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Loader\Configurator\Routes;

Route::get('/', function () {
    return view('acceuil');
});

Route::get('/admin/dashboard', function(){
    return view('adminDashboard');
});
