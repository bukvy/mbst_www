<?php

namespace App\Http\Controllers\Card;

use App\Http\Controllers\Controller;
use App\Models\Card;
use App\Models\User;
use App\Models\Device;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    /** 
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $cards=Card::all();
        $users=User::all();
        $devices=Device::all();
        return view('card.index',compact('cards','users','devices'));
    }
}
