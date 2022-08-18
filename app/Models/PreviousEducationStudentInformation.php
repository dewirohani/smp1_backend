<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreviousEducationStudentInformation extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_id',
        'asal_sekolah',
        'tanggal_skhun',
        'no_skhun',
        'tanggal_ijazah',
        'no_ijazah',
        'pindahan_dari_sekolah',
        'diterima_dikelas',
        'kelompok',
        'tanggal_penerimaan'
    ];
    
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
