<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UserResidance;
use App\Models\UserPassport;
use App\Models\UserFunding;
use App\Models\UserUpload;

class UserDetail extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'status_id','place_birth', 'date_birth', 'gender', 'address', 'nationality', 'avatar','province', 'city','country', 'post_code'];

    public function userResidance()
    {
        return $this->hasOne(UserResidance::class);
    }

    public function userPasport()
    {
        return $this->hasOne(UserPassport::class);
    }

    public function userFunding()
    {
        return $this->hasOne(UserFunding::class);
    }

    public function userDocument()
    {
        return $this->hasOne(UserUpload::class);
    }
}
