<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\KeyDate;

class KeyDateDetail extends Model
{
    use HasFactory;

    protected $fillable = ['key_date_id','title', 'activities', 'date'];
    
    public function keydate()
    {
        return $this->belongsTo(KeyDate::class);
    }
}
