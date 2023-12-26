<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UpdateRequest;
use Illuminate\Http\Request;
use App\Models\User;
//use App\Models\Clinic;

class UpdateController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(UpdateRequest $request,User $user)
    {

        $data=$request->validated();
//        dd($data);
        $user->update($data);
        return redirect()->route('user.show', [$user]);

 
    }
}
