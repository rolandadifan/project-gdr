<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Page;
use App\Models\Setting;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function abouts()
    {
        $about = Page::where('key', 'about')->first();
         $news = Article::with(['articleDetail'])->where('status_id', '1')->orderBy('created_at', 'DESC')->whereHas('articleType', function (Builder $query) {
            $query->where('name', 'news');
        })->limit(3)->get();
        $event = Article::with(['articleDetail'])->where('status_id', '1')->orderBy('created_at', 'DESC')->whereHas('articleType', function (Builder $query) {
            $query->where('name', 'event');
        })->limit(3)->get();
        return view('pages.about.index')->with([
            'about' => $about,
            'news' => $news,
            'event' => $event
        ]);
    }

    public function news()
    {
        $news = Article::with(['articleDetail'])->where('status_id', '1')->orderBy('created_at', 'DESC')->whereHas('articleType', function (Builder $query) {
            $query->where('name', 'news');
        })->limit(3)->get();
        $newsAll = Article::with(['articleDetail'])->where('status_id', '1')->whereHas('articleType', function (Builder $query) {
            $query->where('name', 'news');
        })->paginate(3);
         $article = Article::with(['articleDetail'])->where('status_id', '1')->whereHas('articleType', function (Builder $query) {
            $query->where('name', 'research');
        })->limit(2)->get();
        return view('pages.artikel.news')->with([
            'news' => $news,
            'newsAll' => $newsAll,
            'article' => $article
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
         $article = Article::with(['articleDetail'])->where('status_id', '1')->whereHas('articleType', function (Builder $query) {
            $query->where('name', 'research');
        })->limit(2)->get();
        return view('pages.artikel.event')->with([
            'event' => $event,
            'eventAll' => $eventAll,
            'article' => $article
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
