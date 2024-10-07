<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

$username = 'Tündi';
return view ('welcome', [
    'name' => $username
]);

Route:: get ('/pass-array', function () {
    $tasks = [
        'Go to the store',
        'Go to the market',
        'Go to the work'
    ];
    return view ('tasklist')->withTasks($tasks);
    
});