<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Article;

class ArticleDetail extends Model
{
    use HasFactory;

    protected $fillable = ['article_id', 'title', 'slug', 'excerpt', 'content'];

    public function article()
    {
        $this->belongsTo(Article::class);
    }
}
