<?php

namespace App\Http\Controllers\Town;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Town;

class EditController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Town $town)
    {
        return view('town.edit',compact('town'));
    }
}
