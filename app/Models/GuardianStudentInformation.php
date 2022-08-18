<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuardianStudentInformation extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_id',
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'agama',
        'kewarganegaraan',
        'hubungan_keluarga',
        'ijazah_tertinggi',
        'pekerjaan',
        'penghasilan_perbulan',
        'alamat_rumah',
        'no_hp'
    ];
    
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
