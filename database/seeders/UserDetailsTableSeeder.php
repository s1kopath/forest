<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserDetailsTableSeeder extends Seeder
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
                'image' => 'avatars/640de465ab033.png',
                'kyc_type' => NULL,
                'kyc_image_1' => NULL,
                'kyc_image_2' => NULL,
                'created_at' => '2023-03-02 11:51:44',
                'updated_at' => '2023-03-12 14:40:37',
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
                'image' => NULL,
                'kyc_type' => NULL,
                'kyc_image_1' => NULL,
                'kyc_image_2' => NULL,
                'created_at' => '2023-03-02 11:51:44',
                'updated_at' => '2023-03-02 11:51:44',
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
                'image' => NULL,
                'kyc_type' => NULL,
                'kyc_image_1' => NULL,
                'kyc_image_2' => NULL,
                'created_at' => '2023-03-02 11:51:44',
                'updated_at' => '2023-03-02 11:51:44',
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
                'image' => NULL,
                'kyc_type' => NULL,
                'kyc_image_1' => NULL,
                'kyc_image_2' => NULL,
                'created_at' => '2023-03-02 11:51:44',
                'updated_at' => '2023-03-02 11:51:44',
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
                'image' => NULL,
                'kyc_type' => NULL,
                'kyc_image_1' => NULL,
                'kyc_image_2' => NULL,
                'created_at' => '2023-03-02 11:51:45',
                'updated_at' => '2023-03-02 11:51:45',
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
                'image' => NULL,
                'kyc_type' => NULL,
                'kyc_image_1' => NULL,
                'kyc_image_2' => NULL,
                'created_at' => '2023-03-02 11:51:45',
                'updated_at' => '2023-03-02 11:51:45',
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
                'image' => NULL,
                'kyc_type' => NULL,
                'kyc_image_1' => NULL,
                'kyc_image_2' => NULL,
                'created_at' => '2023-03-02 11:51:45',
                'updated_at' => '2023-03-02 11:51:45',
            ),
            7 => 
            array (
                'id' => 8,
                'user_id' => 10,
                'phone_number' => NULL,
                'date_of_birth' => NULL,
                'identity_number' => NULL,
                'house_no' => NULL,
                'street' => NULL,
                'city' => NULL,
                'zip_code' => NULL,
                'country' => NULL,
                'image' => NULL,
                'kyc_type' => NULL,
                'kyc_image_1' => NULL,
                'kyc_image_2' => NULL,
                'created_at' => '2023-03-13 11:20:58',
                'updated_at' => '2023-03-13 11:20:58',
            ),
        ));
        
        
    }
}