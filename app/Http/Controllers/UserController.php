<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function addUser(){
        $users = DB::table('users')
        ->insertGetId([
            'name'=>'Rafsan-Al-Raian',
            'email'=>'rafsan@gmail.com',
            'age'=>5,
            'city'=>'Dhaka',
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
        // ->where('id',1)
        // ->update([
        //     'name'=>'Samiul Islam Rafi'
        // ]);
        // ->get();
        // ->find(1);
        return $users;
    }
    
}
