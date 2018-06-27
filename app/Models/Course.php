<?php

namespace crud\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

    protected $fillable = [
        'code', 'name', 'institution'
    ];

    public function scopeSearch($query)
    {
        return empty(request()->search) ? $query : $query->where('name', 'like', '%' . request()->search . '%');
    }

    public function students()
    {
        return $this->hasMany(Student::class, 'course_id');
    }

}
