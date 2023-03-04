<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TestUserDetailsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_details')->delete();
        
        \DB::table('user_details')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 3,
                'phone_number' => NULL,
                'date_of_birth' => NULL,
                'identity_number' => NULL,
                'house_no' => NULL,
                'street' => NULL,
                'city' => NULL,
                'zip_code' => NULL,
                'country' => NULL,
                'created_at' => '2023-03-02 11:51:44',
                'updated_at' => '2023-03-02 11:55:53',
                'image' => 'avatars/64008ec96f906.png',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 4,
                'phone_number' => NULL,
                'date_of_birth' => NULL,
                'identity_number' => NULL,
                'house_no' => NULL,
                'street' => NULL,
                'city' => NULL,
                'zip_code' => NULL,
                'country' => NULL,
                'created_at' => '2023-03-02 11:51:44',
                'updated_at' => '2023-03-02 11:51:44',
                'image' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 5,
                'phone_number' => NULL,
                'date_of_birth' => NULL,
                'identity_number' => NULL,
                'house_no' => NULL,
                'street' => NULL,
                'city' => NULL,
                'zip_code' => NULL,
                'country' => NULL,
                'created_at' => '2023-03-02 11:51:44',
                'updated_at' => '2023-03-02 11:51:44',
                'image' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 6,
                'phone_number' => NULL,
                'date_of_birth' => NULL,
                'identity_number' => NULL,
                'house_no' => NULL,
                'street' => NULL,
                'city' => NULL,
                'zip_code' => NULL,
                'country' => NULL,
                'created_at' => '2023-03-02 11:51:44',
                'updated_at' => '2023-03-02 11:51:44',
                'image' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 7,
                'phone_number' => NULL,
                'date_of_birth' => NULL,
                'identity_number' => NULL,
                'house_no' => NULL,
                'street' => NULL,
                'city' => NULL,
                'zip_code' => NULL,
                'country' => NULL,
                'created_at' => '2023-03-02 11:51:45',
                'updated_at' => '2023-03-02 11:51:45',
                'image' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 8,
                'phone_number' => NULL,
                'date_of_birth' => NULL,
                'identity_number' => NULL,
                'house_no' => NULL,
                'street' => NULL,
                'city' => NULL,
                'zip_code' => NULL,
                'country' => NULL,
                'created_at' => '2023-03-02 11:51:45',
                'updated_at' => '2023-03-02 11:51:45',
                'image' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'user_id' => 9,
                'phone_number' => NULL,
                'date_of_birth' => NULL,
                'identity_number' => NULL,
                'house_no' => NULL,
                'street' => NULL,
                'city' => NULL,
                'zip_code' => NULL,
                'country' => NULL,
                'created_at' => '2023-03-02 11:51:45',
                'updated_at' => '2023-03-02 11:51:45',
                'image' => NULL,
            ),
        ));
        
        
    }
}