<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HealthStudentInformation;

class HealthStudentInformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $healthStudentInformation = [
            [            
                'gol_darah' => 'O',  
                'riwayat_penyakit' => '-',  
                'kelainan_jasmani' => '-',  
                'tinggi_badan' => '162 cm',                  
                'berat_badan' => '43 Kg',              
            ],
       
        ];
        foreach ($healthStudentInformation as $row){
            HealthStudentInformation::create($row);
        }
    }
}
