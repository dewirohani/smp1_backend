<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\PersonalStudentDetail;

class PersonalStudentDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $personalStudentDetail = [
            [                
                'nama_lengkap' => 'Dewi',  
                'nama_panggilan' => 'Rohani',  
                'jenis_kelamin' => 'Perempuan',  
                'tempat_lahir' => 'Sumenep',  
                'tanggal_lahir' => Carbon::createFromDate(2000, 6, 11, 0),  
                'agama' => 'Islam',  
                'kewarganegaraan' => 'Indonesia',  
                'anak_ke' => '2',  
                'jumlah_saudara_kandung' => '1',  
                'jumlah_saudara_tiri' => '-',  
                'jumlah_saudara_angkat' => '-',  
                'status_yatim' => 'Tidak',  
                'bahasa_keseharian' => 'Indonesia',  
            ],
       
        ];
        foreach ($personalStudentDetail as $row){
            PersonalStudentDetail::create($row);
        }
    }
}
