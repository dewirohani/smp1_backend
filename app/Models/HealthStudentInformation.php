<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HealthStudentInformation extends Model
{
    use HasFactory;
    protected $fillable = [
        'gol_darah',
        'riwayat_penyakit',
        'kelainan_jasmani',
        'tinggi_badan',
        'berat_badan'
    ];
    
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
