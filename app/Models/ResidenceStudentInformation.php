<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResidenceStudentInformation extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_id',
        'alamat',
        'no_hp',
        'tinggal_dengan',
        'jarak_kesekolah'
    ];
    
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
