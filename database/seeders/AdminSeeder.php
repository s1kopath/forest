<?php

namespace Database\Seeders;

use App\Models\User;
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
            'username' => 'forestuser',
            'name' => 'Forest',
            'email' => 'forest@gmail.com',
            'password' => bcrypt('forest12345'),
            'user_type' => 'admin',
            'refer_code' => uniqid(),
        ]);
        User::create([
            'username' => 'q',
            'name' => 'Frank',
            'email' => 'frank@gmail.com',
            'password' => bcrypt('q'),
            'user_type' => 'admin',
            'refer_code' => uniqid(),
        ]);
    }
}
