<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function abouts()
    {
        return view('pages.about.index');
    }

    public function news()
    {
        $news = Article::with(['articleDetail'])->where('status_id', '1')->orderBy('created_at', 'DESC')->whereHas('articleType', function (Builder $query) {
            $query->where('name', 'news');
        })->limit(3)->get();
        $newsAll = Article::with(['articleDetail'])->where('status_id', '1')->whereHas('articleType', function (Builder $query) {
            $query->where('name', 'news');
        })->paginate(3);
        return view('pages.artikel.news')->with([
            'news' => $news,
            'newsAll' => $newsAll
        ]);
    }

    public function event()
    {
        $event = Article::with(['articleDetail'])->where('status_id', '1')->orderBy('created_at', 'DESC')->whereHas('articleType', function (Builder $query) {
            $query->where('name', 'event');
        })->limit(3)->get();
        $eventAll = Article::with(['articleDetail'])->where('status_id', '1')->whereHas('articleType', function (Builder $query) {
            $query->where('name', 'event');
        })->paginate(3);
        return view('pages.artikel.event')->with([
            'event' => $event,
            'eventAll' => $eventAll
        ]);
    }

    public function detail($id)
    {
        $article = Article::with(['articleType'])->where('status_id', '1')->whereHas('articleDetail', function (Builder $query) use($id) {
            $query->where('slug', $id);
        })->firstOrFail();
        $news = Article::with(['articleDetail'])->where('status_id', '1')->orderBy('created_at', 'DESC')->whereHas('articleType', function (Builder $query) {
            $query->where('name', 'news');
        })->limit(3)->get();
        $event = Article::with(['articleDetail'])->where('status_id', '1')->orderBy('created_at', 'DESC')->whereHas('articleType', function (Builder $query) {
            $query->where('name', 'event');
        })->limit(3)->get();
        return view('pages.artikel.detail')->with([
            'article' => $article,
            'news' => $news,
            'event' => $event
        ]);
    }
}
