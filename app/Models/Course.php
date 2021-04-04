<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CourseInfo;

class Course extends Model
{
    use HasFactory;

    protected $fillable =  [
        'courseName', 'slug', 'thumbnail', 'typeDegree', 'typeCourse', 'typeDuration', 'information', 'duration', 'startPeriode', 'endPeriode', 'campuses', 'keyDate', 'deakinStudent', 'gradeAA', 'sksAA', 'bppAA', 'gradA', 'bppAA', 'gradA', 'bppA', 'sksA', 'gradB', 'bppB', 'sksB', 'status'
    ];

    public function courseInfo()
    {
        return $this->hasMany(CourseInfo::class);
    }
}
