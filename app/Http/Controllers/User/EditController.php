<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Clinic;

class EditController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(User $user,$permissionstr)
    {
        $clinics=Clinic::all();
        $permissioncombinearrays=config('permissions.combine_array');
        $permissioncombines=config('permissions.combine');


        return view('user.edit',compact('user','clinics','permissioncombines','permissioncombinearrays','permissionstr'));
    }
}
