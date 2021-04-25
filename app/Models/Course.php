<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CourseDetail;
use App\Models\Status;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['status_id', 'name', 'slug'];

    public function courseDetail()
    {
       return  $this->hasOne(CourseDetail::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
