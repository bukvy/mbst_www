<?php

namespace App\Http\Controllers\Town;

use App\Http\Controllers\Controller;
use App\Models\Town;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $towns=Town::all();
        return view('town.index',compact('towns'));
    }
}
