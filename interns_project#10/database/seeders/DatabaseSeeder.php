<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'name' => "Mccoy Abrasaldo",
            'email' => "mccoyabrasaldo@iphitech.com",
            'password' => Hash::make('secret')
        ]);

        \App\Models\User::create([
            'name' => "Admin Abrasaldo",
            'email' => "admin@iphitech.com",
            'password' => Hash::make('testpass123')
        ]);

        \App\Models\User::create([
            'name' => "Admin Abrasaldo",
            'email' => "Adminabrasaldo@iphitech.com",
            'password' => Hash::make('testpass123')
        ]);
    }
}
