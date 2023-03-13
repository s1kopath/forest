<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'username' => 'forestuser',
                'name' => 'Forest',
                'email' => 'forest@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Ce8hnw9ZOUQ9T3wq9vWO5.qvDNLrUEBHvyG/XBWg8VS9y/5UwymRa',
                'user_type' => 'admin',
                'remember_token' => NULL,
                'created_at' => '2023-03-02 11:51:44',
                'updated_at' => '2023-03-02 11:51:44',
                'referer_id' => NULL,
                'refer_code' => '64008dd0a6900',
                'is_verified' => 0,
            ),
            1 => 
            array (
                'id' => 2,
                'username' => 'q',
                'name' => 'Frank',
                'email' => 'frank@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$SD7PfRzpGuuIty2NmH8kBOAdULrKy.6xUYjs/bGdgPhmfEik1jx76',
                'user_type' => 'admin',
                'remember_token' => NULL,
                'created_at' => '2023-03-02 11:51:44',
                'updated_at' => '2023-03-02 11:51:44',
                'referer_id' => NULL,
                'refer_code' => '64008dd0b4ad3',
                'is_verified' => 0,
            ),
            2 => 
            array (
                'id' => 3,
                'username' => 'a',
                'name' => 'Frankie',
                'email' => 'frankie@gmail.com',
                'email_verified_at' => '2023-03-02 11:51:44',
                'password' => '$2y$10$q90XOJgBcIh8tKillhuntens8L76NDXBhvaEZQwZdESkWky8qoVB.',
                'user_type' => 'public',
                'remember_token' => NULL,
                'created_at' => '2023-03-02 11:51:44',
                'updated_at' => '2023-03-02 11:51:44',
                'referer_id' => NULL,
                'refer_code' => '64008dd0c416e',
                'is_verified' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'username' => 'b',
                'name' => 'Nero Henderson',
                'email' => 'kecabu@gh.com',
                'email_verified_at' => '2023-03-02 11:51:44',
                'password' => '$2y$10$wBFN0kmHCrZMkDbP4G7rH.BRtatYbSwPwH8AklWHsGSRWcTpqxVUC',
                'user_type' => 'public',
                'remember_token' => NULL,
                'created_at' => '2023-03-02 11:51:44',
                'updated_at' => '2023-03-02 11:51:44',
                'referer_id' => 3,
                'refer_code' => '64008dd0d295b',
                'is_verified' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'username' => 'zipynysoz',
                'name' => 'Dieter Stephenson',
                'email' => 'capemynyx@mailinator.com',
                'email_verified_at' => '2023-03-02 11:51:44',
                'password' => '$2y$10$.FOpL.bB9ZtzVO4lyT4Ii.GHwj9bqzxthMJhbcxQA4codW99.tIZy',
                'user_type' => 'public',
                'remember_token' => NULL,
                'created_at' => '2023-03-02 11:51:44',
                'updated_at' => '2023-03-02 11:51:44',
                'referer_id' => 3,
                'refer_code' => '64008dd0e0ccd',
                'is_verified' => 0,
            ),
            5 => 
            array (
                'id' => 6,
                'username' => 'hojyziboge',
                'name' => 'Abel Soto',
                'email' => 'cetulewu@mailinator.com',
                'email_verified_at' => '2023-03-02 11:51:44',
                'password' => '$2y$10$YbxrvU00j/dVpE3G/z1kwuK3Cd9gWQBwvfjGRi5zzpu9asaRzQW5C',
                'user_type' => 'public',
                'remember_token' => NULL,
                'created_at' => '2023-03-02 11:51:44',
                'updated_at' => '2023-03-02 11:51:44',
                'referer_id' => 5,
                'refer_code' => '64008dd0ee5ef',
                'is_verified' => 0,
            ),
            6 => 
            array (
                'id' => 7,
                'username' => 'fesydybox',
                'name' => 'Kay Juarez',
                'email' => 'mawyfigi@mailinator.com',
                'email_verified_at' => '2023-03-02 11:51:45',
                'password' => '$2y$10$fzzVz/ju5RN.zER7qnZZpea2fQwKsm05wC0BONw0y3JvIYJ4U5pEu',
                'user_type' => 'public',
                'remember_token' => NULL,
                'created_at' => '2023-03-02 11:51:45',
                'updated_at' => '2023-03-02 11:51:45',
                'referer_id' => 5,
                'refer_code' => '64008dd107f46',
                'is_verified' => 0,
            ),
            7 => 
            array (
                'id' => 8,
                'username' => 'c',
                'name' => 'Melissa Ross',
                'email' => 'dalic@mailinator.com',
                'email_verified_at' => '2023-03-02 11:51:45',
                'password' => '$2y$10$Rgr2PodarvdHXpUnVAbReO2Zvl4kqsKR4lRhKNpqo3h4PsnRrMpgS',
                'user_type' => 'public',
                'remember_token' => NULL,
                'created_at' => '2023-03-02 11:51:45',
                'updated_at' => '2023-03-02 11:51:45',
                'referer_id' => 4,
                'refer_code' => '64008dd115708',
                'is_verified' => 1,
            ),
            8 => 
            array (
                'id' => 9,
                'username' => 'd',
                'name' => 'Wallace Pugh',
                'email' => 'qewubi@mailinator.com',
                'email_verified_at' => '2023-03-02 11:51:45',
                'password' => '$2y$10$QCS2haoigR.P0WM.RQwYP.M5ONxSQcXwaBFk46E.uplkwHSv/1DJO',
                'user_type' => 'public',
                'remember_token' => NULL,
                'created_at' => '2023-03-02 11:51:45',
                'updated_at' => '2023-03-02 11:51:45',
                'referer_id' => 8,
                'refer_code' => '64008dd1230f9',
                'is_verified' => 1,
            ),
            9 => 
            array (
                'id' => 10,
                'username' => 'kobizy',
                'name' => 'Isabelle Wright',
                'email' => 'hujixif@mailinator.com',
                'email_verified_at' => '2023-03-13 11:21:23',
                'password' => '$2y$10$1Qfy8D4WTQ2E7XFdOT1lkeOwPr2CStL8cvGovJvnWCTq4pgxowi7a',
                'user_type' => 'public',
                'remember_token' => NULL,
                'created_at' => '2023-03-13 11:20:52',
                'updated_at' => '2023-03-13 11:21:48',
                'referer_id' => 3,
                'refer_code' => '640f07143c417',
                'is_verified' => 1,
            ),
        ));
        
        
    }
}