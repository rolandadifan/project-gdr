<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Course;
use App\Models\CoursePrice;

class CourseDetail extends Model
{
    use HasFactory;

    protected $fillable = ['course_id', 'thumbnail', 'title', 'degree', 'duration', 'campus', 'key_dates', 'deaken_student', 'content'];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function prices()
    {
        return $this->hasMany(CoursePrice::class);
    }
}
