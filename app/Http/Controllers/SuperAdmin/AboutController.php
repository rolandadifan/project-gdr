<?php

namespace App\Http\Controllers\superAdmin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function index()
    {
        $about = Page::where('key', 'about')->first();
        return view('superadmin.pages.about.edit')->with([
            'about' => $about
        ]);
    }

    public function edit(Request $request)
    {
        $json = [
            'excerpt' => $request->excerpt,
            'content' => $request->content,
        ];

        $setting = Page::where('key', 'about')->first();
        if(!$setting && $request->key == null){
            Page::create([
                'key' => 'about',
                'value' => json_encode($json)
            ]);
                 return back()->with('status', 'data berhasil di buat');
        }else if($request->key){
            $setting->update([
                'value' => json_encode($json)
            ]);
            return back()->with('status', 'data berhasil di update');
        }

    }

    public function changeThumbnail(Request $request)
    {
        try {
            $data = $request->file('thumbnail')->store('setting', 'public');
            $setting = Page::where('key', 'about')->first();
            // dd($setting);
             if(!$setting && $request->key == null){
                Page::create([
                    'key' => 'about',
                    'thumbnail' => $data
                ]);
            }else if($request->key){
                if($setting->thumbnail){
                     $file_path = Storage::url($setting->thumbnail);
                    $path = str_replace('\\', '/', public_path());
                    if (file_exists($path . $file_path)) {
                    unlink($path . $file_path);
                           $setting->update([
                            'thumbnail' => $data
                        ]);
                     }
                }else if($setting->thumbnail == null){
                   $setting->update([
                        'thumbnail' => $data
                    ]);
                }
                
            }
            return back()->with('status', 'successfuly updated');
        } catch (\Throwable $th) {
            return back()->with('error', 'Oopss Something Went Wrong');
        }
    }

    public function requirmentIndex()
    {
        $page_one = Page::where('key', 'step-1')->first();
        $page_two = Page::where('key', 'step-2')->first();
        $page_three = Page::where('key', 'step-3')->first();
        return view('superadmin.pages.requirment.index')->with([
            'page_one' => $page_one,
            'page_two' => $page_two,
            'page_three' => $page_three,
        ]);
    }

    public function reqirmentStoreStepOne(Request $request)
    {
        $data = [
            'title' => $request->title,
            'content' => $request->content
        ];

        $page = Page::where('key', 'step-1')->first();
        if(!$page){
            Page::create([
                'key' => 'step-1',
                'value' => json_encode($data),
            ]);
        }else{
            $page->update([
                'value' => json_encode($data)
            ]);
        }

        return back()->with('status', 'Successfully Edited');
    }
    
    public function reqirmentStoreStepTwo(Request $request)
    {
        $data = [
            'title' => $request->title,
            'content' => $request->content
        ];

        $page = Page::where('key', 'step-2')->first();
        if(!$page){
            Page::create([
                'key' => 'step-2',
                'value' => json_encode($data),
            ]);
        }else{
            $page->update([
                'value' => json_encode($data)
            ]);
        }

        return back()->with('status', 'Successfully Edited');
    }

    public function reqirmentStoreStepThree(Request $request)
    {
        $data = [
            'title' => $request->title,
            'content' => $request->content
        ];

        $page = Page::where('key', 'step-3')->first();
        if(!$page){
            Page::create([
                'key' => 'step-3',
                'value' => json_encode($data),
            ]);
        }else{
            $page->update([
                'value' => json_encode($data)
            ]);
        }

        return back()->with('status', 'Successfully Edited');
    }
}
