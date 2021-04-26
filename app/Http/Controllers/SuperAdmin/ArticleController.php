<?php

namespace App\Http\Controllers\superadmin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ArtikelRequest;
use App\Models\Article;
use App\Models\ArticleType;
use App\Models\ArticleDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Builder;

class ArticleController extends Controller
{
    public function NewsIndex()
    {
        $artikel = Article::whereHas('articleType', function (Builder $query) {
            $query->where('name', 'news');
        })->with('status', 'articleType')->get();
        return view('superadmin.pages.artikel.news.index')->with([
            'artikel' => $artikel
        ]);
    }

    public function EventIndex()
    {
        $artikel = Article::where('type', 'event')->get();
        return view('superadmin.pages.artikel.event.index')->with([
            'artikel' => $artikel
        ]);;
    }

    public function ScholarshipIndex()
    {
        $artikel = Article::where('type', 'scholarship')->get();
        return view('superadmin.pages.artikel.scholarship.index')->with([
            'artikel' => $artikel
        ]);;
    }

    public function create()
    {
        $tipe = ArticleType::select('id','name')->get();
        return view('superadmin.pages.artikel.create')->with('tipe',$tipe);
    }

    public function store(ArtikelRequest $request)
    {
        try {
            // master
            $article['type_id'] = $request->type;
            $article['status_id'] = 1;
            $article_master = Article::create($article);

            // $data = $request->all();
            $article_dtl['article_id'] = $article_master->id;
            $article_dtl['title'] = $request->artikelName;
            $article_dtl['slug'] = Str::slug($request->artikelName);
            $article_dtl['excerpt'] = $request->excerpt;
            $article_dtl['content'] = $request->content;
            $article_dtl['thumbnail'] = $request->file('thumbnail')->store('artikel', 'public');
            ArticleDetail::create($article_dtl);

            return back()->with('status', 'Article Successfuly Create');
        } catch (Exception $th) {
            return back()->with('status', $th->getMessage());
        }
    }

    public function edit($id)
    {
        $artikel = Article::findOrFail($id);
        return view();
    }

    public function update(Request $request, $id)
    {
        if (!$request->thumbnail || $request->thumbnail == null) {
            $data = $request->all();
            $artikel = Article::findOrFail($id);
            $artikel->update($data);
            return back()->with('status', 'Article Successfuly Updated');
        } else {
            $artikel = Article::findOrFail($id);
            $file_path = Storage::url($artikel->thumbnail);
            $path = str_replace('\\', '/', public_path());
            if (file_exists($path . $file_path)) {
                unlink($path . $file_path);
                $data = $request->all();
                $data['thumbnail'] = $request->file('thumbnail')->store('artikel', 'public');
                $artikel->update($data);
                return back()->with('status', 'Article Successfuly Updated');
            }
        }
    }

    public function destroy($id)
    {
        $artikel = Article::findOrFail($id);
        $artikel->delete();
        return redirect()->route('')->with('status', 'Article Successfuly Deleted');
    }
}