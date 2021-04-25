<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Course;

class CourseDetail extends Model
{
    use HasFactory;

    protected $fillable = ['course_id', 'thumbnail', 'title', 'degree', 'duration', 'campus', 'key_dates', 'deaken_student'];

    public function course()
    {
        $this->belongsTo(Course::class);
    }
}
