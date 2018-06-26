<?php

namespace crud\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

    protected $fillable = [
        'code', 'name', 'institution'
    ];

    public function students()
    {
        return $this->belongsToMany(Student::class, 'student_courses', 'course_id', 'student_id')
            ->withTimestamps();
    }

}
