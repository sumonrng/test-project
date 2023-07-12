<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function showUser(){
        $users = DB::table('users')
                // ->paginate(4);
                // ->fragment('user');
                // ->appends(['sort'=>'search']);
                ->orderBy('id')
                ->cursorPaginate(4);
                // ->get();
                // ->simplePaginate(4);
                // ->limit(3)
                // ->get();

        return view('showuser',['data'=>$users]);
    }
    public function addUser(Request $req){
        $users = DB::table('users')
        ->insert([
            'name'=>$req->username,
            'email'=>$req->email,
            'age'=>$req->age,
            'city'=>$req->city
        ]);

        if($users){
            return redirect()->route('showdata');
            //echo "Data successfully Added";
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
    public function updateUser(Request $req,int $id){
        $users = DB::table('users')
                ->where('id',$id)
                ->update([
                    'name'=>$req->username,
                    'email'=>$req->email,
                    'age'=>$req->age,
                    'city'=>$req->city
                ]);
            //return view('updateuser',['data'=>$users]);
            return redirect()->route('showdata');
    }
    public function showUpdate(string $id){
        $users = DB::table('users')->find($id);
        return view('updateuser',['data'=>$users]);
        //return $users;
    }
    public function deleteUser(string $id){
        $users = DB::table('users')
                // ->truncate();
                ->where('id',$id)
                ->delete();
                
        if($users){
            return redirect()->route('showdata');
        }
        
    }
    
}
