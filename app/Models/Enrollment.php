<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Course;
use App\Models\Status;

class Enrollment extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'course_id', 'status_id', 'university'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
