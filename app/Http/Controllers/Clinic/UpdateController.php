<?php

namespace App\Http\Controllers\Clinic;

use App\Http\Controllers\Controller;
use App\Http\Requests\Clinic\UpdateRequest;
use Illuminate\Http\Request;
use App\Models\Clinic;

class UpdateController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(UpdateRequest $request,Clinic $clinic)
    {
        $data=$request->validated();
        $clinic->update($data);

        return view('clinic.show',compact('clinic'));

    }
}
