<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Town;
use App\Models\Clinic;

class ShowController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(User $user)
    {
//        $towns=Town::all();
        $clinics=Clinic::all();
        $permissionstr="";
        $permissions=config('permissions.bits');
        foreach(array_keys($permissions) as $key){
            if($key & $user->permission){
            $permissionstr.="+".  $permissions[$key];
            }
        }
        $permissionstr=preg_replace("/^\+/", " ",$permissionstr);

 //       dd($permissions,$user->permission, $permissionstr);
        return view('user.show',compact('user','clinics','permissionstr'));
    }
}
