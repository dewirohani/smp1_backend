<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailStudentHobbie extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_hobbie_id',
        'nama'
    ];

    public function studentHobbie()
    {
        return $this->belongsTo(StudentHobbie::class);
    }
}
