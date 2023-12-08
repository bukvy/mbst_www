<?php

namespace App\Http\Controllers\Town;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Town;

class DeleteController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Town $town)
    {
        $town->delete();

        return redirect()->route('town.delete',$town->id);
    }
}
