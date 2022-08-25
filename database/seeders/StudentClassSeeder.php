<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\StudentClass;

class StudentClassSeeder extends Seeder
{
  
    public function run()
    {
        $studentClass = [
            [
                'kode' => 'VII',
                'nama' => '7-1',
                'deskripsi' => '-',  
            ],
           
        ];
        foreach ($studentClass as $row){
            StudentClass::create($row);
        }
    }
}
