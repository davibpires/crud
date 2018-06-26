<?php

namespace crud\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

    protected $fillable = [
        'name', 'registration', 'semester', 'status'
    ];

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'student_courses', 'student_id', 'course_id')
            ->withTimestamps();
    }

}
