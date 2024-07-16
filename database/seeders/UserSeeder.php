<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $email = $this->command->ask('Enter Email', 'admin@wedding.online');
        $name = $this->command->ask('Enter Name', 'Admin');
        $role = $this->command->ask('Enter Role', 'Admin');
        $password = $this->command->ask('Enter Password', '123456');
        \App\Models\User::updateOrCreate(
            ['email' => $email],
            [
                'name' => $name,
                'role' => $role,
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make($password),
            ]
        );
    }
}
