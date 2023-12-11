<?php

namespace App\Http\Controllers\Card;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Card;

class ShowController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Card $card)
    {
        return view('card.show',compact('card'));
    }
}
