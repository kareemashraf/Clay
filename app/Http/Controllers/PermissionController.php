<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Permission;

class PermissionController extends Controller
{
    const permitted = 1; 
    const not_permitted = 0;


    /**
     * Determine if any rows exist for the current query.
     * /api/open/{user_id}/{door_}
     * @return bool
     */
    public function check(Request $request){
        
        $user_id =  $request->user_id;
        $door_id =  $request->door_id;

        $matchThese = ['user_id' => $user_id, 'door_id' => $door_id];
        $results = Permission::where($matchThese)->get();
       	

        if ($results->isEmpty()) {
        	return self::not_permitted;
        }else{
        	return self::permitted;
        }
    }
}
