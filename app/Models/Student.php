<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nisn',
        'class_id',
               
    ];
    protected $nullable = [
        'personal_student_detail_id',       
        'health_student_information_id',       
        'residence_student_information_id',       
        'guardian_student_information_id',       
        'previous_education_student_information_id',       
        'student_hobbie_id',
    ];

    protected $with = [
        'studentClass',
        'personalStudentDetail',
        'heatlhStudentInformation',
        'residenceStudentInformation',
        'guardianStudentInformation',
        'previousEducationStudentInformation',
        'StudentHobbie',

    ];

    public function studentClass()
    {
        return $this->belongsTo(StudentClass::class);
    }

    public function personalStudentDetail()
    {
        return $this->belongsTo(PersonalStudentDetail::class);
    }

    public function heatlhStudentInformation()
    {
        return $this->belongsTo(HealthStudentInformation::class);
    }

    public function residenceStudentInformation()
    {
        return $this->belongsTo(ResidenceStudentInformation::class);
    }

    public function guardianStudentInformation()
    {
        return $this->belongsTo(GuardianStudentInformation::class);
    }

    public function previousEducationStudentInformation()
    {
        return $this->belongsTo(PreviousEducationStudentInformation::class);
    }

    public function studentHobbie()
    {
        return $this->belongsTo(StudentHobbie::class);
    }

}
