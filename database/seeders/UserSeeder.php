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
            ]        
        ];

        foreach ($users as $user) {
            User::create($user);  
        }
    }
}
