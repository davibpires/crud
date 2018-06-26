<?php

namespace crud\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

    protected $fillable = [
        'name', 'course_id', 'registration', 'semester', 'status'
    ];

    public function scopeSearch($query)
    {
        return empty(request()->search) ? $query : $query->where('name', 'like', '%' . request()->search . '%');
    }

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }

}
