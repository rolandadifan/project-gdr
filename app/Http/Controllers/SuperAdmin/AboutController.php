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
}
