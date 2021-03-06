<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentCourse extends Model
{
    use HasFactory;

    protected $table = 'student_course';
    protected $fillable = [
        'course_id',
        'student_id',
    ];

    public function courses()
    {
        return $this->belongsTo('App\Models\Course','course_id');
    }
}
