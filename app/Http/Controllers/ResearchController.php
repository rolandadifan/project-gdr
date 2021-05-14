<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class ResearchController extends Controller
{
    public function index()
    {
         $article = Article::with(['articleDetail'])->where('status_id', '1')->whereHas('articleType', function (Builder $query) {
            $query->where('name', 'research');
        })->get();
        return view('pages.research.index')->with([
            'article' =>  $article
        ]);
    }
}
