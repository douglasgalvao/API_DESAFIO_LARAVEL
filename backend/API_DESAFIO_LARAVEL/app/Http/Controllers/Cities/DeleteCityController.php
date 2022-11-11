<?php

namespace App\Http\Controllers\Cities;

use App\Http\Controllers\Controller;
use App\Models\City;
use Illuminate\Http\Request;

class DeleteCityController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, $city_id)
    {
        $city = City::findOrFail($city_id);
        $city->delete();

        return $city;
    }
}
