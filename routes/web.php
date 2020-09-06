<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'DatapointController@index')->name('datapoint.index');
