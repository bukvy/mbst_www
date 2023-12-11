<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Clinic;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    /** 
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $users=User::all();
        $clinics=Clinic::all();
        return view('user.index',compact('users','clinics'));
    }
}
