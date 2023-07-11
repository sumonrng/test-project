<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function showUser(){
        $users = DB::table('users')
                ->get();

        return view('showuser',['data'=>$users]);
    }
    public function addUser(){
        $users = DB::table('users')
        ->insert([
            'name'=>'Samiul Islam Rafi',
            'email'=>'rafiraian2b@gmail.com',
            'age'=>24,
            'city'=>'Rangpur'
        ]);

        if($users){
            echo "Data successfully Added";
        }else{
            echo "Data Added Unseccessfull";
        }
        //$users = DB::table('users')
        //->where('id',1)
        //->increment('age',1,['city'=>'Rajshahi']);
        // ->decrement('age',2,['city'=>'Dinajpur']);
            // [
            // 'name'=>'Samiul Islam Rafi',
            // 'email'=>'sumonmti498@gmail.com',
            // 'age'=>16,
            // 'city'=>'Sanfordstad'
            // ],
            // [
            //     'age'=>20
            // ]
       
        // ->insertGetId([
        //     'name'=>'Rafsan-Al-Raian',
        //     'email'=>'rafsanbro@gmail.com',
        //     'age'=>5,
        //     'city'=>'Dhaka',
        //     'created_at'=>now(),
        //     'updated_at'=>now()
        // ]);
        // ->where('id',1)
        // ->update([
        //     'name'=>'Samiul Islam Rafi'
        // ]);
        // ->get();
        // ->find(1);
        //return $users;
        // if($users){
        //     echo "Data successfully Added";
        // }else{
        //     echo "Data Added Unseccessfull";
        // }
    }
    public function deleteUser(string $id){
        $users = DB::table('users')
                // ->truncate();
                ->where('id',$id)
                ->delete();
                
        if($users){
            echo "Successfully Deleted";
            return redirect()->route('showdata');
        }
        
    }
    
}
