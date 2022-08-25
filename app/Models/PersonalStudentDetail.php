<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalStudentDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_lengkap',
        'nama_panggilan',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'agama',
        'kewarganegaraan',
        'anak_ke',
        'jumlah_saudara_kandung',
        'jumlah_saudara_tiri',
        'jumlah_saudara_angkat',
        'status_yatim',
        'bahasa_keseharian',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
