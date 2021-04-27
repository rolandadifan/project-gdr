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
        session(['article' => 'news']);
        $artikel = Article::whereHas('articleType', function (Builder $query) {
            $query->where('name', 'news');
        })->with('status', 'articleType', 'articleDetail')->get();
        return view('superadmin.pages.artikel.news.index')->with([
            'artikel' => $artikel
        ]);
    }

    public function EventIndex()
    {
        session(['article' => 'event']);
        $artikel = Article::whereHas('articleType', function (Builder $query) {
            $query->where('name', 'event');
        })->with('status', 'articleType', 'articleDetail')->get();
        return view('superadmin.pages.artikel.event.index')->with([
            'artikel' => $artikel
        ]);
    }

    public function ScholarshipIndex()
    {
        session(['article' => 'scholarship']);
        $artikel = Article::whereHas('articleType', function (Builder $query) {
            $query->where('name', 'scholarship');
        })->with('status', 'articleType', 'articleDetail')->get();
        return view('superadmin.pages.artikel.scholarship.index')->with([
            'artikel' => $artikel
        ]);
    }

    public function researchIndex()
    {
        session(['article' => 'research']);
        $artikel = Article::whereHas('articleType', function (Builder $query) {
            $query->where('name', 'research');
        })->with('status', 'articleType', 'articleDetail')->get();
        return view('superadmin.pages.artikel.research.index')->with([
            'artikel' => $artikel
        ]);
    }

    public function create()
    {
        if(!session('article')){
            session(['article' => 'news']);
        }
        $tipe = ArticleType::select('id','name')->get();
        return view('superadmin.pages.artikel.create')->with(['tipe'=>$tipe, 'defaultType'=> session('article')]);
    }

    public function store(ArtikelRequest $request)
    {
        try {
            // master
            $article['type_id'] = $request->type;
            $article['status_id'] = 2;
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
        $tipe = ArticleType::select('id','name')->get();
        $data = Article::with('status', 'articleType', 'articleDetail')->findOrFail($id);
        return view('superadmin.pages.artikel.edit')->with(['data'=>$data,'tipe'=>$tipe, 'defaultType'=> session('article')]);
    }

    public function update(Request $request, $id)
    {
        if (!$request->thumbnail || $request->thumbnail == null) {
            // master
            $article['type_id'] = $request->type;
            $article['status_id'] = 2;
            $article_master = Article::findOrFail($id);
            $article_master->update($article);

            // detail;
            $article_dtl['title'] = $request->artikelName;
            $article_dtl['slug'] = Str::slug($request->artikelName);
            $article_dtl['excerpt'] = $request->excerpt;
            $article_dtl['content'] = $request->content;
            $article_detail = ArticleDetail::where('article_id',$id)->first();
            $article_detail->update($article_dtl);

            return back()->with('status', 'Article Successfuly Updated');
        } else {
            $artikel = Article::findOrFail($id);
            $article_detail = ArticleDetail::where('article_id',$id)->first();
            $file_path = Storage::url($article_detail->thumbnail);
            $path = str_replace('\\', '/', public_path());
            if (file_exists($path . $file_path)) {
                unlink($path . $file_path);
                // master
                $article['type_id'] = $request->type;
                $article['status_id'] = 2;
                $article_master = Article::findOrFail($id);
                $article_master->update($article);

                // detail;
                $article_dtl['title'] = $request->artikelName;
                $article_dtl['slug'] = Str::slug($request->artikelName);
                $article_dtl['excerpt'] = $request->excerpt;
                $article_dtl['content'] = $request->content;
                $article_dtl['thumbnail'] = $request->file('thumbnail')->store('artikel', 'public');
                $article_detail = ArticleDetail::where('article_id',$id)->first();
                $article_detail->update($article_dtl);
                return back()->with('status', 'Article Successfuly Updated');
            }
        }
    }

    public function destroy($id)
    {
        $artikel = Article::findOrFail($id);
        $article_detail = ArticleDetail::where('article_id',$id)->first();
        if ($article_detail->thumbnail || $article_detail->thumbnail != null) {
            $file_path = Storage::url($article_detail->thumbnail);
            $path = str_replace('\\', '/', public_path());
            if (file_exists($path . $file_path)) {
                unlink($path . $file_path);
            }
        }
        $artikel->delete();
        return back()->with('status', 'Article Successfuly Deleted');
    }
}
