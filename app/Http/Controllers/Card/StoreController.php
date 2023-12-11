<?php

namespace App\Http\Controllers\Card;
use App\Http\Requests\Card\StoreRequest;

//use Illuminate\Foundation\Http\FormRequest;

use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;
use App\Models\Card;

class StoreController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(StoreRequest $request)
    {

//        dd($request);
      $data=$request->validated();


        Card::firstOrCreate($data);
        return redirect()->route('card.index');
    }
}
