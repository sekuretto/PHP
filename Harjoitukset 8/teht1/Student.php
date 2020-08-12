<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'student';

    public function courses()
    {
        return $this->belongsToMany('App\Course', 'student_has_course', 'student_id', 'course_id')
             ->withPivot('created_at', 'updated_at');
    }

    protected $fillable = [
        'lastname',
        'firstname'
    ];
}
