<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\PreviousEducationStudentInformation;

class PreviousEducationStudentInformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $previousEducationStudentInformation = [
            [

                'asal_sekolah' => 'sDN KOLOR II ',              
                'tanggal_skhun' => Carbon::createFromDate(2022, 8, 10, 0),  
                'no_skhun' => '1111111',  
                'tanggal_ijazah' => Carbon::createFromDate(2022, 8, 24, 0),                   
                'no_ijazah' => '2222222',  
                'pindahan_dari_sekolah' => '-',  
                'diterima_dikelas' => '7-1 ',  
                'kelompok' => '1',  
                'tanggal_penerimaan' => Carbon::createFromDate(2022, 7, 1, 0),                 
            ],
       
        ];
        foreach ($previousEducationStudentInformation as $row){
            PreviousEducationStudentInformation::create($row);
        }
    }
}
