<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Mohammed',
            'email' => 'Med.kr@gmail.com',
            'password' => bcrypt('12345678'),
            'phone'=>'0666123433',
            'ville'=>'fes',
            'admin'=>1,
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),

        ]);
    }
}
