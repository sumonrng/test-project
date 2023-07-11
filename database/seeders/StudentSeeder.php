<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\student;
use Illuminate\Support\Facades\File;

class StudentSeeder extends Seeder
{
    
    public function run(): void
    {
        for($i=1;$i <= 10; $i++){
            student::create([
                'stu_id'=>'431',
                'name'=>fake()->name(),
                'email'=>fake()->email(),
                'mobile'=>fake()->phoneNumber()
            ]);
        }
        
        // $json = File::get(path:'database/json/student.json');
        // $students = collect(json_decode($json));
        
        // $students->each(function($student){
        //     student::create([
        //         'stu_id'=>$student->stu_id,
        //         'name'=>$student->name,
        //         'email'=>$student->email,
        //         'mobile'=>$student->mobile

        //     ]);
        // });
        // $students = collect(
        //     [
        //         [
        //             'stu_id'=>'122',
        //             'name'=>'Md Thamedul Islam',
        //             'email'=>'sumonmti498@gmail.com',
        //             'mobile'=>'01787909190'
        //         ],
        //         [
        //             'stu_id'=>'122',
        //             'name'=>'Samiul Islam Rafi',
        //             'email'=>'sumonmti498@hotmail.com',
        //             'mobile'=>'01751400362'
        //         ],
        //         [
        //             'stu_id'=>'122',
        //             'name'=>'Al Raian',
        //             'email'=>'alraian@gmail.com',
        //             'mobile'=>'01735668768'
        //         ]
        //     ]
        // );

        // $students->each(function($student){
        //     student::insert($student);
        // });

        // student::create([
        //     'stu_id'=>'2',
        //     'name'=>'Md Thamedul Islam',
        //     'email'=>'sumonmti498@gmail.com',
        //     'mobile'=>'01787909190'
        // ]);
    }
}
