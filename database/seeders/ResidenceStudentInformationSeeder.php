<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ResidenceStudentInformation;

class ResidenceStudentInformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $residenceStudentInformation = [
            [

                'alamat' => 'Kolor',  
                'no_hp' => '087743331758',  
                'tinggal_dengan' => 'Orang Tua',  
                'jarak_kesekolah' => '3 Km',                  
            ],
       
        ];
        foreach ($residenceStudentInformation as $row){
            ResidenceStudentInformation::create($row);
        }
    }
}
