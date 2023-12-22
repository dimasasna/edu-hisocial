<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Portfolio;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name'=> 'Dimas Asna Nugraha',
            'username' => 'dimasasna',
            'email'=> 'dimas.asna@gmail.com',
            'password'=> bcrypt('password'),
        ]);
        User::create([
            'name'=> 'Faiza Dyah Nurmalitasani',
            'username' => 'faizadyah',
            'email'=> 'faizadyah30@gmail.com',
            'password'=> bcrypt('password'),
        ]);

        Category::create([
            'name'=> 'Social Media Management',
        ]);
        Category::create([
            'name'=> 'Branding Identity Visual',
        ]);
        Category::create([
            'name'=> 'Logo & Branding Identity',
        ]);
        Category::create([
            'name'=> 'Website & System Service',
        ]);
        Category::create([
            'name'=> 'Digital Marketing Strategy',
        ]);

        Portfolio::create([
            'name' => 'Gambar Hewan',
            'category_id' => 1,
            'altimg' => 'gambarhewan',
            'description' => 'Ini adalah gambar hewan'
        ]);
        Portfolio::create([
            'name' => 'Gambar Mobil',
            'category_id' => 3,
            'altimg' => 'gambarmobil',
            'description' => 'Ini adalah gambar mobil'
        ]);
    }
}
