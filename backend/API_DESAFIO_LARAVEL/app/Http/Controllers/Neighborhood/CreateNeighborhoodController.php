<?php

namespace App\Http\Controllers\Neighborhood;

use App\Http\Controllers\Controller;
use App\Models\Neighborhood;
use Illuminate\Http\Request;

class CreateNeighborhoodController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $neighborhood = new Neighborhood();
        $neighborhood->name = $request->name;
        $neighborhood->city_id = $request->city_id;
        $neighborhood->save();
        return $neighborhood;
    }
}
