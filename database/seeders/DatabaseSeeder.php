<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::firstOrCreate([
            'name' => 'ahmed wassim',
            'email' => 'ahmedwassim000@gmail.com',
            'phone' => '01029287271',
            'date_of_birth' => '1997-01-01',
            'password' => bcrypt('123456789'),
        ]);

        $this->call([
            CategorySeeder::class,
            ProductSeeder::class,
            ChefSeeder::class,
        ]);
    }
}
