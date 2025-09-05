<?php

namespace Database\Seeders;

use App\Models\OtherSetting;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        //     'password' => Hash::make('password'),
        // ]);
        User::create([
            'name' => 'Takest User',
            'email' => 'testak@example.com',
            'password' => Hash::make('sauryapellet@123'),
        ]);
        // OtherSetting::create([
        //     'email' => 'test@example.com',

        // ]);
    }
}
