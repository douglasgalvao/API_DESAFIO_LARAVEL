<?php

namespace App\Http\Controllers\Cities;

use App\Http\Controllers\Controller;
use App\Models\City;
use Illuminate\Http\Request;

class UpdateCityController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, $city_id)
    {
        $request->validate([
            'name' => 'required|string|min:2|max:255',
        ]);

        $city = City::findOrFail($city_id);
        $city->update($request->all());

        return $city;
    }
}
