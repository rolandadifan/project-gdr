<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleDetail;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class ScholarshipController extends Controller
{
    public function index()
    {
        $article = Article::with(['articleDetail'])->where('status_id', '1')->whereHas('articleType', function (Builder $query) {
            $query->where('name', 'scholarship');
        })->get();
        return view('pages.scholarship.index')->with([
            'article' =>  $article
        ]);
    }

    public function detail($id)
    {
        $article = Article::with(['articleType'])->where('status_id', '1')->whereHas('articleDetail', function (Builder $query) use($id) {
            $query->where('slug', $id);
        })->firstOrFail();

        return view('pages.scholarship.detail')->with([
            'article' =>  $article
        ]);
    }
}
