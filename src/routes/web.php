<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    for ($i = 0; $i < 1000; $i++){
        \App\Datapoint::create([
            'name' => 'temperature',
            'value'=> 90.00,
            'cast' => 'float'
        ]);
    }

    return view('welcome');
});

Route::post('/datapoint/create', [
    'as'    => 'datapoints.store',
    'uses'  => 'DatapointController@store'
]);
