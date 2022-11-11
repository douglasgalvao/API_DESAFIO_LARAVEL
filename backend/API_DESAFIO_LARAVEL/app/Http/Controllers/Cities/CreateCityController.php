<?php

namespace App\Http\Controllers\Cities;

use App\Http\Controllers\Controller;
use App\Models\City;
use Illuminate\Http\Request;

class CreateCityController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function __invoke(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:2|max:255',
            'state' => 'required|string|min:2|max:255'
        ]);
        return City::create($request->all());
    }
}
