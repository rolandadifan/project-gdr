<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Article;

class ArticleDetail extends Model
{
    use HasFactory;

    protected $fillable = ['article_id', 'title', 'slug', 'thumbnail', 'excerpt', 'content'];

    public function article()
    {
        $this->belongsTo(Article::class);
    }
}
