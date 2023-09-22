<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => "Admin",
            'email' => "admin@test.com",
            'role' => "Admin",
            'email_verified_at' => now(),
            'password' => 'admin123', // password
            'remember_token' => Str::random(10),

        ]);
    }
}
