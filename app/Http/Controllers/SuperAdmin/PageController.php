<?php

namespace App\Http\Controllers\superadmin;

use App\Http\Controllers\Controller;
use App\Models\MenuDetail;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

    public function editMneu($id)
    {
        $menu = MenuDetail::findOrFail($id);
        return view('superadmin.pages.page.edit')->with([
            'menu' => $menu 
        ]);
    }

    public function updateMneu(Request $request,$id)
    {
         $title = $request->title;
        $slug = Str::slug($title);
        $content = $request->content;
        $menu = MenuDetail::findOrFail($id);

        $menu->update([
            'title' => $title,
            'slug' => $slug,
            'content' => $content
        ]);
        return back()->with('status' , 'Successfully Edit Menu');
    }

    public function activeMenu($id)
    {
        $data = DB::table('menu_details')->where('id', $id)->first();
        $status = $data->status_id;

        if ($status == 2) {
            DB::table('menu_details')->where('id', $id)->update([
                'status_id' => 1
            ]);
            return back()->with('status', 'Menu Active');
        } else {
            return back()->with('error', 'Status Already Active');
        }
    }

    public function inActiveMenu($id)
    {
        $data = DB::table('menu_details')->where('id', $id)->first();
        $status = $data->status_id;

        if ($status == 1) {
            DB::table('menu_details')->where('id', $id)->update([
                'status_id' => 2
            ]);
            return back()->with('status', 'Menu InActive');
        } else {
            return back()->with('error', 'Status Already InActive');
        }
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
