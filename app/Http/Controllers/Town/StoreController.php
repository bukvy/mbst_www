<?php

namespace App\Http\Controllers\Town;
use App\Http\Requests\Town\StoreRequest;

//use Illuminate\Foundation\Http\FormRequest;

use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;
use App\Models\Town;

class StoreController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(StoreRequest $request)
    {
        $data=$request->validated();
        Town::firstOrCreate($data);
        return redirect()->route('town.index');
    }
}
