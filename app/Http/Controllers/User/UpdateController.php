<?php

namespace App\Http\Controllers\Town;

use App\Http\Controllers\Controller;
use App\Http\Requests\Town\UpdateRequest;
use Illuminate\Http\Request;
use App\Models\Town;

class UpdateController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(UpdateRequest $request,Town $town)
    {
        $data=$request->validated();
        $town->update($data);

        return view('town.show',compact('town'));

    }
}
