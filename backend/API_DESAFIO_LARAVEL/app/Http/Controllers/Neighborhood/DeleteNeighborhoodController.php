<?php

namespace App\Http\Controllers\Neighborhood;

use App\Http\Controllers\Controller;
use App\Models\Neighborhood;
use Illuminate\Database\Console\Migrations\StatusCommand;
use Illuminate\Http\Request;

class DeleteNeighborhoodController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, $neighbor)
    {
        $neighbor = Neighborhood::findOrFail($neighbor);
        $neighbor -> delete();
        return $neighbor;
    }
}
