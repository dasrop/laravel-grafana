<?php

namespace App\Http\Controllers;

use App\Models\Datapoint;
use Illuminate\Http\Request;

class DatapointController extends Controller
{
    public function index()
    {
        return Datapoint::paginate(20);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'value' => 'required'
        ]);

        return Datapoint::create(
            $request->only('name', 'value', 'cast')
        );
    }
}
