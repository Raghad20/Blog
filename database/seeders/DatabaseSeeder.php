<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


         User::create([
             'name' =>'Raghad',
             'email' => 'ragahd99@gmail.com',
             'password' => '123',
             'is_admin'=>true,
         ]);
         $this->call([
             categorySeeder::class,
             postSeeder::class,
             commentSeeder::class,
             serviceSeeder::class,
         ]);
    }
}
