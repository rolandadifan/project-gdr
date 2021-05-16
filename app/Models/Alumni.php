<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Course;

class Alumni extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'course_id', 'name', 'predicate', 'is_top', 'thumbnail', 'review'];

    public function user()
    {
       return  $this->belongsTo(User::class);
    }

    public function course()
    {
       return  $this->belongsTo(Course::class);
    }
}