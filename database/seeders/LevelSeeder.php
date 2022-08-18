<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Level;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $level = [
            [
                'name' => 'Admin',
                'description' => '-',  
            ],
            [
                'name' => 'Kepala Sekolah',
                'description' => '-',  
            ],
            [
                'name' => 'Wali Kelas',
                'description' => '-',  
            ],
            [
                'name' => 'Kepegawaian',
                'description' => '-',  
            ],
            [
                'name' => 'Kesiswaan',
                'description' => '-',  
            ],
        ];
        foreach ($level as $row){
            Level::create($row);
        }
    }
}
