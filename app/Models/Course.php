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
        return $this->hasMany(Student::class, 'course_id');
    }

}
