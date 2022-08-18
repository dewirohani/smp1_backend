<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'nip',
        'nama',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'nik',
        'nuptk',
        'npwp',
        'email',
        'status_pegawai',
        'pendidikan_terakhir',
        'jurusan',
        'tugas_pegawai',
        'tmt_tugas',
        'tmt_pangkat',
        'tmt_pns',
    ];
}
