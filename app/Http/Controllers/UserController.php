<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function addUser(){
        $users = DB::table('users')
        ->where('id',1)
        ->update([
            'name'=>'Samiul Islam Rafi'
        ]);
        // ->get();
        // ->find(1);
        return $users;
    }
    
}
