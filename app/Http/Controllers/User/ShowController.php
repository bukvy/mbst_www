<?php

namespace App\Http\Controllers\Town;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Town;

class ShowController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Town $town)
    {
        return view('town.show',compact('town'));
    }
}
