<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function updateUser(){
        $users = DB::table('students')
            ->insertGetId(
                [
                'stu_id'=>431,
                'name'=>'Samiul Islam Rafi',
                'age'=>10,
                'email'=>'rafiraian2bb@gmail.com',
                'mobile'=>'01751400362',
                'city'=>'Rangpur',
                'created_at'=>now(),
                'updated_at'=>now()
                ]
                //['email'],
                //['mobile']
        );
        return $users;

            // if($users){
            //     echo "Data Insert Successfolly";
            // }else{
            //     echo "Data not added";
            // }
    }




















    public function showStudent(){
        $users = DB::table('students')
        // ->sum('age');
        // ->count('age');
        // ->max('age');
        // ->min('age');
        // ->average('age');
        ->avg('age');
        // ->latest()
        // ->oldest()
        // ->inRandomOrder()
        // ->limit(3) 
        // ->take(3)
        // ->offset(1) 
        // ->skip(2)
        // ->first();
        // ->orderBy('name')
        // ->orderBy('name','desc')
        // ->whereDate('created_at','2023-06-19')
        // ->whereMonth('created_at',6)
        // ->whereDay('created_at',9)
        // ->where([
        //     ['id','=',1],
        //     ['age','>',19]
        // ])
        // ->whereNotBetween('id',[3,6])
        // ->whereBetween('age',[18,20])
        //->where('name','like','S%')
        // ->where('name','Selena Abshire')
        // ->where('id',5)
        // ->select('name')
        // ->where('age','>=',19)
        // ->orWhere('city','=','Mayertview')
        // ->orWhere('email','like','C%')
        // ->get();
        return $users;
    }
}