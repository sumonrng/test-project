<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class studensSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for($i=1;$i<10;$i++){
            DB::table('students')->insert([
                'stu_id'=>'2',
                'name'=>$faker->name,
                'email'=>$faker->email,
                'mobile'=>'01787909190'
            ]);
        }
    }
}
