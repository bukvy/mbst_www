<?php

namespace App\Http\Controllers\Clinic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Clinic;

class ShowController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Clinic $clinic)
    {
        return view('clinic.show',compact('clinic'));
    }
}
