<?php

namespace App\Http\Controllers;

use App\Models\Datapoint;

class DatapointController extends Controller
{
    public function index()
    {
        return Datapoint::paginate(20);
    }
}
