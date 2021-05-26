<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UserDetail;

class UserFunding extends Model
{
    use HasFactory;

    protected $fillable = ['user_detail_id', 'type', 'provider', 'guarantor'];

    public function userDetail()
    {
        return $this->belongsTo(UserDetail::class);
    }
}
