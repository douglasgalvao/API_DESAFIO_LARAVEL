<?php

namespace App\Http\Controllers\Neighborhood;

use App\Http\Controllers\Controller;
use App\Models\Neighborhood;
use Illuminate\Http\Request;

class GetNeighborhoodsController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return Neighborhood::get();
    }
}
