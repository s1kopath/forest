<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Wallet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newUser = User::create([
            'username' => 'a',
            'name' => 'Frankie',
            'email' => 'frankie@gmail.com',
            'password' => bcrypt('a'),
            'user_type' => 'public',
            'refer_code' => uniqid(),
            'email_verified_at' => now(),
        ]);
        Wallet::create([
            'user_id' => $newUser->id,
            'main_amount' => 500000.00,
            'bonus_amount' => 200.00,
            'withdrawable_amount' => 499800.00,
            'total_earning' => 0.00,
        ]);
    }
}
