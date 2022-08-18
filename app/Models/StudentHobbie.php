<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentHobbie extends Model
{
    use HasFactory;

    protected $fillable = [
        'kesenian',
        'pendidikan_jasmani',
        'organisasi',
        'lain_lain',
    ];
    
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
