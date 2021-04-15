<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Course;

class CourseInfo extends Model
{
    use HasFactory;

    protected $fillable = ['course_id', 'title', 'info'];

    public function course()
    {
        return $this->BelongsTo(Course::class);
    }
}
