<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{

    public function run()
    {
        $student = [
            [
                'nisn' => '123456789',
                'class_id' => '1',
                'personal_student_detail_id' => '1',       
                'health_student_information_id'=> '1',       
                'residence_student_information_id'=> '1',       
                'guardian_student_information_id'=> '1',       
                'previous_education_student_information_id'=> '1',       
                'student_hobbie_id'=> null,                             
            ],
           
        ];
        foreach ($student as $row){
            Student::create($row);
        }
    }
}
