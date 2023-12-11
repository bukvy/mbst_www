<?php

namespace App\Http\Controllers\User;
use App\Http\Requests\User\StoreRequest;

//use Illuminate\Foundation\Http\FormRequest;

use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;
use App\Models\User;

class StoreController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(StoreRequest $request)
    {

//        dd($request);
      $data=$request->validated();


        User::firstOrCreate($data);
        return redirect()->route('user.index');
    }
}
