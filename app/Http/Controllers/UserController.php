<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function addUser(){
        $users = DB::table('users')
        ->get();
        // ->find(1);
        return $users;
    }
    
}
