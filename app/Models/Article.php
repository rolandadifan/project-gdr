<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ArticleType;
use App\Models\ArticleDetail;
use App\Models\Status;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['status_id', 'type_id'];

    public function articleDetail()
    {
       return  $this->hasOne(ArticleDetail::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id', 'id');
    }

    public function articleType()
    {
        return $this->belongsTo(ArticleType::class, 'type_id', 'id');
    }
}