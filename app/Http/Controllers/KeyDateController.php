<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\KeyDate;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class KeyDateController extends Controller
{
    public function index()
    {
        $keys = KeyDate::with('KeyDetail')->orderBy('created_at', 'DESC')->get();
        $article = Article::with(['articleDetail'])->where('status_id', '1')->orderBy('created_at', 'DESC')->whereHas('articleType', function (Builder $query) {
            $query->where('name', 'research');
        })->limit(2)->get();
        return view('pages.key-date.index')->with([
            'keys' => $keys,
            'article' => $article,
        ]);
    }
}
