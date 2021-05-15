<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Status;

class MenuDetail extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'status_id', 'slug', 'content'];

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
