<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user=User::create([
            'name' => 'admin2',
            'email' => 'admin2@gmail.com',
            'email_verified_at' => now(),
            'password' => '12345678'
        ]);
        $user->assignRole('writer','admin');
    }
}
