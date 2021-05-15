<?php

namespace App\Http\Controllers\superadmin;

use App\Http\Controllers\Controller;
use App\Models\MenuDetail;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PageController extends Controller
{
    public function index()
    {
        $menu = MenuDetail::with('status')->get();
        return view('superadmin.pages.page.index')->with([
            'menu' => $menu
        ]);
    }

    public function submenu()
    {
        $single = Setting::where('key', 'sigle-unit')->first();
        $under = Setting::where('key', 'under-unit')->first();
        $postg = Setting::where('key', 'post-unit')->first();
        return view('superadmin.pages.page.submenu')->with([
            'single' => $single,
            'under' => $under,
            'postg' => $postg
        ]);
    }

    public function create()
    {
        return view('superadmin.pages.page.create');
    }

    public function menuStore(Request $request)
    {
        $title = $request->title;
        $status = 1;
        $slug = Str::slug($title);
        $content = $request->content;
 
        MenuDetail::create([
            'title' => $title,
            'status_id' => $status,
            'slug' => $slug,
            'content' => $content
        ]);

        return back()->with('status', 'Success Create Page');
    }

    public function single(Request $request)
    {
        $page = Setting::where('key', 'sigle-unit')->first();
        if($page){
            $data = $request->all();
            $page->update($data);
            return back();
        }else{
            $data_key = $request->input('key');
            $data_value = $request->input('value');
            Setting::create([
                'key' => $data_key,
                'value' => $data_value
            ]);
            return back();
        }
    }

    public function under(Request $request)
    {
        $page = Setting::where('key', 'under-unit')->first();
        if($page){
            $data = $request->all();
            $page->update($data);
            return back();
        }else{
            $data_key = $request->input('key');
            $data_value = $request->input('value');
            Setting::create([
                'key' => $data_key,
                'value' => $data_value
            ]);
            return back();
        }
    }

    public function postg(Request $request)
    {
        $page = Setting::where('key', 'post-unit')->first();
        if($page){
            $data = $request->all();
            $page->update($data);
            return back();
        }else{
            $data_key = $request->input('key');
            $data_value = $request->input('value');
            Setting::create([
                'key' => $data_key,
                'value' => $data_value
            ]);
            return back();
        }
    }
}
