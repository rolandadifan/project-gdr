<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserUpload extends Model
{
    use HasFactory;

    protected $fillable = ['user_detail_id', 'photo_passport','photo_formal', 'statment_letter', 'sponsor_letter', 'photo_cover_passport', 'sponsor_letter_sign_id', 'letter_accept','financial', 'medical', 'academic_transkip', 'last_certificate'];
}
