<?php

namespace App\Http\Controllers\superadmin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ArtikelRequest;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    public function NewsIndex()
    {
        $artikel = Article::where('type', 'news')->get();
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
        return view('superadmin.pages.artikel.create');
    }

    public function store(ArtikelRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->artikelName);
        $data['thumbnail'] = $request->file('thumbnail')->store('artikel', 'public');
        Article::create($data);
        return back()->with('status', 'Article Successfuly Create');
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
