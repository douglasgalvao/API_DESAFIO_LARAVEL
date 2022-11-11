<?php

namespace App\Http\Controllers\Neighborhood;

use App\Http\Controllers\Controller;
use App\Models\Neighborhood;
use Illuminate\Http\Request;

class GetNeighborhoodController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, $neighbor_id)
    {
        return Neighborhood::findOrFail($neighbor_id);
    }
}
