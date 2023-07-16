<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\City;
use App\Models\student;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        //City::factory()->count(10)->create();
        student::factory()->count(10)->create();
        //User::factory()->count(10)->create();
        // $this->call([
        //     citiesSeeder::class
        // ]);
        // $this->call([
        //     StudentSeeder::class
        // ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
