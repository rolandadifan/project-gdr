<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserResidance extends Model
{
    use HasFactory;

    protected $fillable = ['user_detail_id', 'current_city', 'current_prov', 'current_country', 'current_postcode', 'address'];

}
