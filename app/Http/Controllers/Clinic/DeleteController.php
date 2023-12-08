<?php

namespace App\Http\Controllers\Clinic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Clinic;

class DeleteController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Clinic $clinic)
    {
        $clinic->delete();

        return redirect()->route('clinic.delete',$clinic->id);
    }
}
