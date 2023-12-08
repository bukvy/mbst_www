<?php

namespace App\Http\Controllers\Town;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Town;

class CreateController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return view('town.create');
    }
}
