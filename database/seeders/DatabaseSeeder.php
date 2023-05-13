<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
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

//        User::create([
//            'name' => 'admin',
//            'email' => 'admin@gmail.com',
//            'password' => bcrypt('password'),
//            'role' => 'admin'
//        ]);
//
//        User::create([
//            'name' => 'employee',
//            'email' => 'employee@gmail.com',
//            'password' => bcrypt('password'),
//            'role' => 'employee'
//        ]);
//        User::create([
//            'name' => 'manager',
//            'email' => 'manager@gmail.com',
//            'password' => bcrypt('password'),
//            'role' => 'manager'
//        ]);
//
//        User::create([
//            'name' => 'general_manager',
//            'email' => 'general_manager@gmail.com',
//            'password' => bcrypt('password'),
//            'role' => 'general_manager'
//        ]);
//
//        User::create([
//            'name' => 'accountant',
//            'email' => 'accountant@gmail.com',
//            'password' => bcrypt('password'),
//            'role' => 'accountant'
//        ]);
//
//        User::create([
//            'name' => 'hrd',
//            'email' => 'hrd@gmail.com',
//            'password' => bcrypt('password'),
//            'role' => 'hrd'
//        ]);

        Post::factory(15)->create();


    }
}
