<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPassport extends Model
{
    use HasFactory;

    protected $fillable = ['user_detail_id', 'nomor', 'filling', 'expired'];
}
