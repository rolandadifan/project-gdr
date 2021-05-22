<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\KeyDateDetail;
use App\Models\Status;

class KeyDate extends Model
{
    use HasFactory;

    protected $fillable = ['status_id', 'period', 'open_status', 'close_date'];

    public function KeyDetail()
    {
        return $this->hasMany(KeyDateDetail::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
