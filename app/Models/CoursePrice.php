<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CourseDetail;

class CoursePrice extends Model
{
    use HasFactory;

    protected $fillable = ['course_detail_id', 'name', 'value'];

    public function course_details()
    {
        return $this->belongsTo(CourseDetail::class);
    }
}
