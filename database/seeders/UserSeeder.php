<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'username' => 'admin',
                'email' => 'admin@smp1.com',
                'password' => bcrypt('12345678'),                
                'level_id' => '1',
            ],        
            [
                'username' => 'Saiful Bahri',
                'email' => 'saifulbahri@smp1.com',
                'password' => bcrypt('12345678'),                
                'level_id' => '2',
            ],        
            [
                'username' => 'Alief',
                'email' => 'alief@smp1.com',
                'password' => bcrypt('12345678'),                
                'level_id' => '3',
            ],        
            [
                'username' => 'Kepegawaian',
                'email' => 'kepegawaian@smp1.com',
                'password' => bcrypt('12345678'),                
                'level_id' => '4',
            ],        
            [
                'username' => 'Kesiswaan',
                'email' => 'kesiswaan@smp1.com',
                'password' => bcrypt('12345678'),                
                'level_id' => '5',
            ],        
        ];

        foreach ($users as $user) {
            User::create($user);  
        }
    }
}
