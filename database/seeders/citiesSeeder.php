<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class citiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for($i=1; $i<10; $i++){
            DB::table('cities')->insert([
                'cid'=>$faker->buildingNumber(),
                'city'=>$faker->city()
            ]);
        }
    }
}
