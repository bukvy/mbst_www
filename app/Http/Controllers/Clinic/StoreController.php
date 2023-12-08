<?php

namespace App\Http\Controllers\Clinic;
use App\Http\Requests\Clinic\StoreRequest;

//use Illuminate\Foundation\Http\FormRequest;

use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;
use App\Models\Clinic;

class StoreController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(StoreRequest $request)
    {

        $data=$request->validated();

        Clinic::firstOrCreate($data);
        return redirect()->route('clinic.index');
    }
}
