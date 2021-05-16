<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LifeCampusController extends Controller
{
    public function whyStudy()
    {
        $sneakpeak = Page::where('key', 'sneakpeak')->first();
        $chooseOne = Page::where('key', 'chooseOne')->first();
        $chooseTwo = Page::where('key', 'chooseTwo')->first();
        $chooseThree = Page::where('key', 'chooseThree')->first();
        $lat = Page::where('key', 'lat')->first();
        $wio = Page::where('key', 'wio')->first();
        $wit = Page::where('key', 'wit')->first();
        return view('superadmin.pages.student-life.why-study')->with([
            'sneakpeak' => $sneakpeak,
            'chooseOne' => $chooseOne,
            'chooseTwo' => $chooseTwo,
            'chooseThree' => $chooseThree,
            'lat' => $lat,
            'wio' => $wio,
            'wit' => $wit
        ]);
    }

    public function graduation()
    {
        $spg = Page::where('key', 'spg')->first();
        $gio = Page::where('key', 'gio')->first();
        $git = Page::where('key', 'git')->first();
        $githree = Page::where('key', 'githree')->first();
        $gif = Page::where('key', 'gif')->first();
        $giv = Page::where('key', 'giv')->first();
        $gix = Page::where('key', 'gix')->first();
        return view('superadmin.pages.student-life.graduation')->with([
            'spg' => $spg,
            'gio' => $gio,
            'git' => $git,
            'githree' => $githree,
            'gif' => $gif,
            'giv' => $giv,
            'gix' => $gix,
        ]);
    }

    public function studentLife()
    {
         $slpOne = Page::where('key', 'slpOne')->first();
         $slpTwo = Page::where('key', 'slpTwo')->first();
         $slpThree = Page::where('key', 'slpThree')->first();
         $sio = Page::where('key', 'sio')->first();
         $sit = Page::where('key', 'sit')->first();
         $sithree = Page::where('key', 'sithree')->first();
         $sif = Page::where('key', 'sif')->first();
         $siv = Page::where('key', 'siv')->first();
         $six = Page::where('key', 'six')->first();
         $sis = Page::where('key', 'sis')->first();
         $sie = Page::where('key', 'sie')->first();
         $sin = Page::where('key', 'sin')->first();
        return view('superadmin.pages.student-life.student-life')->with([
            'slpOne' => $slpOne,
            'slpTwo' => $slpTwo,
            'slpThree' => $slpThree,
            'sio' => $sio,
            'sit' => $sit,
            'sithree' => $sithree,
            'sif' => $sif,
            'siv' => $siv,
            'six' => $six,
            'sis' => $sis,
            'sie' => $sie,
            'sin' => $sin,
        ]);
    }

    public function sneakpeak(Request $request)
    {
        $setting = Page::where('key', 'sneakpeak')->first();
         if(!$setting){
            Page::create([
                'key' => 'sneakpeak',
                'thumbnail' => $request->file('thumbnail')->store('setting', 'public')
            ]);
            
        }else{
            $file_path = Storage::url($setting->thumbnail);
            $path = str_replace('\\', '/', public_path());
            if (file_exists($path . $file_path)) {
                    unlink($path . $file_path);
                    $setting->update([
                        'thumbnail' =>  $request->file('thumbnail')->store('setting', 'public')
                    ]);
            }
        }

        return back()->with('status', 'Successfully Edited');
    }

     public function chooseOne(Request $request)
    {
        $data = [
            'title' => $request->title,
            'content' => $request->content,
        ];
        // $thumbnail =
        $setting = Page::where('key', 'chooseOne')->first();
        if(!$setting){
            if(!$request->file('thumbnail') || $request->file('thumbnail') == null){
                 Page::create([
                    'key' => 'chooseOne',
                    'value' => json_encode($data)
                ]);
            }else{
                Page::create([
                    'key' => 'chooseOne',
                    'value' => json_encode($data),
                    'thumbnail' =>  $request->file('thumbnail')->store('setting', 'public')
                ]);
            }
        }else{
            if(!$request->file('thumbnail')){
                $setting->update([
                    'value' => json_encode($data)
                ]);
            }else if($request->file('thumbnail')){
                $file_path = Storage::url($setting->thumbnail);
                $path = str_replace('\\', '/', public_path());
                if($setting->thumbnail == null){
                     $setting->update([
                    'thumbnail' =>  $request->file('thumbnail')->store('setting', 'public')
                ]);
                }else if (file_exists($path . $file_path)) {
                    unlink($path . $file_path);
                    $setting->update([
                        'value' => json_encode($data),
                        'thumbnail' =>  $request->file('thumbnail')->store('setting', 'public')
                    ]);
                }
            }
        }
        return back()->with('status', 'Successfully Edited');
    }

     public function chooseTwo(Request $request)
    {
        $data = [
            'title' => $request->title,
            'content' => $request->content,
        ];
        // $thumbnail =
        $setting = Page::where('key', 'chooseTwo')->first();
        if(!$setting){
            if(!$request->file('thumbnail') || $request->file('thumbnail') == null){
                 Page::create([
                    'key' => 'chooseTwo',
                    'value' => json_encode($data)
                ]);
            }else{
                Page::create([
                    'key' => 'chooseTwo',
                    'value' => json_encode($data),
                    'thumbnail' =>  $request->file('thumbnail')->store('setting', 'public')
                ]);
            }
        }else{
            if(!$request->file('thumbnail')){
                $setting->update([
                    'value' => json_encode($data)
                ]);
            }else if($request->file('thumbnail')){
                $file_path = Storage::url($setting->thumbnail);
                $path = str_replace('\\', '/', public_path());
                if($setting->thumbnail == null){
                     $setting->update([
                    'thumbnail' =>  $request->file('thumbnail')->store('setting', 'public')
                ]);
                }else if (file_exists($path . $file_path)) {
                    unlink($path . $file_path);
                    $setting->update([
                        'value' => json_encode($data),
                        'thumbnail' =>  $request->file('thumbnail')->store('setting', 'public')
                    ]);
                }
            }
        }
        return back()->with('status', 'Successfully Edited');
    }

    public function chooseThree(Request $request)
    {
        $data = [
            'title' => $request->title,
            'content' => $request->content,
        ];
        // $thumbnail =
        $setting = Page::where('key', 'chooseThree')->first();
        if(!$setting){
            if(!$request->file('thumbnail') || $request->file('thumbnail') == null){
                 Page::create([
                    'key' => 'chooseThree',
                    'value' => json_encode($data)
                ]);
            }else{
                Page::create([
                    'key' => 'chooseThree',
                    'value' => json_encode($data),
                    'thumbnail' =>  $request->file('thumbnail')->store('setting', 'public')
                ]);
            }
        }else{
            if(!$request->file('thumbnail')){
                $setting->update([
                    'value' => json_encode($data)
                ]);
            }else if($request->file('thumbnail')){
                $file_path = Storage::url($setting->thumbnail);
                $path = str_replace('\\', '/', public_path());
                if($setting->thumbnail == null){
                     $setting->update([
                    'thumbnail' =>  $request->file('thumbnail')->store('setting', 'public')
                ]);
                }else if (file_exists($path . $file_path)) {
                    unlink($path . $file_path);
                    $setting->update([
                        'value' => json_encode($data),
                        'thumbnail' =>  $request->file('thumbnail')->store('setting', 'public')
                    ]);
                }
            }
        }
        return back()->with('status', 'Successfully Edited');
    }

    public function lat(Request $request)
    {
         $json = [
            'title' => $request->title,
            'content' => $request->content,
        ];

        $setting = Page::where('key', 'lat')->first();
        if(!$setting && $request->key == null){
            Page::create([
                'key' => 'lat',
                'value' => json_encode($json)
            ]);
                 return back()->with('status', 'Successfully Edited');
        }else if($request->key){
            $setting->update([
                'value' => json_encode($json)
            ]);
            return back()->with('status', 'Successfully Edited');
        }

    }

     public function whyinfoOne(Request $request)
    {
        $data = [
            'title' => $request->title,
            'content' => $request->content,
        ];
        // $thumbnail =
        $setting = Page::where('key', 'wio')->first();
        if(!$setting){
            if(!$request->file('thumbnail') || $request->file('thumbnail') == null){
                 Page::create([
                    'key' => 'wio',
                    'value' => json_encode($data)
                ]);
            }else{
                Page::create([
                    'key' => 'wio',
                    'value' => json_encode($data),
                    'thumbnail' =>  $request->file('thumbnail')->store('setting', 'public')
                ]);
            }
        }else{
            if(!$request->file('thumbnail')){
                $setting->update([
                    'value' => json_encode($data)
                ]);
            }else if($request->file('thumbnail')){
                $file_path = Storage::url($setting->thumbnail);
                $path = str_replace('\\', '/', public_path());
                if($setting->thumbnail == null){
                     $setting->update([
                    'thumbnail' =>  $request->file('thumbnail')->store('setting', 'public')
                ]);
                }else if (file_exists($path . $file_path)) {
                    unlink($path . $file_path);
                    $setting->update([
                        'value' => json_encode($data),
                        'thumbnail' =>  $request->file('thumbnail')->store('setting', 'public')
                    ]);
                }
            }
        }
        return back()->with('status', 'Successfully Edited');
    }

     public function whyinfoTwo(Request $request)
    {
        $data = [
            'title' => $request->title,
            'content' => $request->content,
        ];
        // $thumbnail =
        $setting = Page::where('key', 'wit')->first();
        if(!$setting){
            if(!$request->file('thumbnail') || $request->file('thumbnail') == null){
                 Page::create([
                    'key' => 'wit',
                    'value' => json_encode($data)
                ]);
            }else{
                Page::create([
                    'key' => 'wit',
                    'value' => json_encode($data),
                    'thumbnail' =>  $request->file('thumbnail')->store('setting', 'public')
                ]);
            }
        }else{
            if(!$request->file('thumbnail')){
                $setting->update([
                    'value' => json_encode($data)
                ]);
            }else if($request->file('thumbnail')){
                $file_path = Storage::url($setting->thumbnail);
                $path = str_replace('\\', '/', public_path());
                if($setting->thumbnail == null){
                     $setting->update([
                    'thumbnail' =>  $request->file('thumbnail')->store('setting', 'public')
                ]);
                }else if (file_exists($path . $file_path)) {
                    unlink($path . $file_path);
                    $setting->update([
                        'value' => json_encode($data),
                        'thumbnail' =>  $request->file('thumbnail')->store('setting', 'public')
                    ]);
                }
            }
        }
        return back()->with('status', 'Successfully Edited');
    }

     public function slpOne(Request $request)
    {
        $data = [
            'title' => $request->title,
            'content' => $request->content,
        ];
        // $thumbnail =
        $setting = Page::where('key', 'slpOne')->first();
        if(!$setting){
            if(!$request->file('thumbnail') || $request->file('thumbnail') == null){
                 Page::create([
                    'key' => 'slpOne',
                    'value' => json_encode($data)
                ]);
            }else{
                Page::create([
                    'key' => 'slpOne',
                    'value' => json_encode($data),
                    'thumbnail' =>  $request->file('thumbnail')->store('setting', 'public')
                ]);
            }
        }else{
            if(!$request->file('thumbnail')){
                $setting->update([
                    'value' => json_encode($data)
                ]);
            }else if($request->file('thumbnail')){
                $file_path = Storage::url($setting->thumbnail);
                $path = str_replace('\\', '/', public_path());
                if($setting->thumbnail == null){
                     $setting->update([
                    'thumbnail' =>  $request->file('thumbnail')->store('setting', 'public')
                ]);
                }else if (file_exists($path . $file_path)) {
                    unlink($path . $file_path);
                    $setting->update([
                        'value' => json_encode($data),
                        'thumbnail' =>  $request->file('thumbnail')->store('setting', 'public')
                    ]);
                }
            }
        }
        return back()->with('status', 'Successfully Edited');
    }

     public function slpTwo(Request $request)
    {
        $data = [
            'title' => $request->title,
            'content' => $request->content,
        ];
        // $thumbnail =
        $setting = Page::where('key', 'slpTwo')->first();
        if(!$setting){
            if(!$request->file('thumbnail') || $request->file('thumbnail') == null){
                 Page::create([
                    'key' => 'slpTwo',
                    'value' => json_encode($data)
                ]);
            }else{
                Page::create([
                    'key' => 'slpTwo',
                    'value' => json_encode($data),
                    'thumbnail' =>  $request->file('thumbnail')->store('setting', 'public')
                ]);
            }
        }else{
            if(!$request->file('thumbnail')){
                $setting->update([
                    'value' => json_encode($data)
                ]);
            }else if($request->file('thumbnail')){
                $file_path = Storage::url($setting->thumbnail);
                $path = str_replace('\\', '/', public_path());
                if($setting->thumbnail == null){
                     $setting->update([
                    'thumbnail' =>  $request->file('thumbnail')->store('setting', 'public')
                ]);
                }else if (file_exists($path . $file_path)) {
                    unlink($path . $file_path);
                    $setting->update([
                        'value' => json_encode($data),
                        'thumbnail' =>  $request->file('thumbnail')->store('setting', 'public')
                    ]);
                }
            }
        }
        return back()->with('status', 'Successfully Edited');
    }
  
     public function slpThree(Request $request)
    {
        $data = [
            'title' => $request->title,
            'content' => $request->content,
        ];
        // $thumbnail =
        $setting = Page::where('key', 'slpThree')->first();
        if(!$setting){
            if(!$request->file('thumbnail') || $request->file('thumbnail') == null){
                 Page::create([
                    'key' => 'slpThree',
                    'value' => json_encode($data)
                ]);
            }else{
                Page::create([
                    'key' => 'slpThree',
                    'value' => json_encode($data),
                    'thumbnail' =>  $request->file('thumbnail')->store('setting', 'public')
                ]);
            }
        }else{
            if(!$request->file('thumbnail')){
                $setting->update([
                    'value' => json_encode($data)
                ]);
            }else if($request->file('thumbnail')){
                $file_path = Storage::url($setting->thumbnail);
                $path = str_replace('\\', '/', public_path());
                if($setting->thumbnail == null){
                     $setting->update([
                    'thumbnail' =>  $request->file('thumbnail')->store('setting', 'public')
                ]);
                }else if (file_exists($path . $file_path)) {
                    unlink($path . $file_path);
                    $setting->update([
                        'value' => json_encode($data),
                        'thumbnail' =>  $request->file('thumbnail')->store('setting', 'public')
                    ]);
                }
            }
        }
        return back()->with('status', 'Successfully Edited');
    }
 
     public function sio(Request $request)
    {
        $data = [
            'title' => $request->title,
            'content' => $request->content,
        ];
        // $thumbnail =
        $setting = Page::where('key', 'sio')->first();
        if(!$setting){
            if(!$request->file('thumbnail') || $request->file('thumbnail') == null){
                 Page::create([
                    'key' => 'sio',
                    'value' => json_encode($data)
                ]);
            }else{
                Page::create([
                    'key' => 'sio',
                    'value' => json_encode($data),
                    'thumbnail' =>  $request->file('thumbnail')->store('setting', 'public')
                ]);
            }
        }else{
            if(!$request->file('thumbnail')){
                $setting->update([
                    'value' => json_encode($data)
                ]);
            }else if($request->file('thumbnail')){
                $file_path = Storage::url($setting->thumbnail);
                $path = str_replace('\\', '/', public_path());
                if($setting->thumbnail == null){
                     $setting->update([
                    'thumbnail' =>  $request->file('thumbnail')->store('setting', 'public')
                ]);
                }else if (file_exists($path . $file_path)) {
                    unlink($path . $file_path);
                    $setting->update([
                        'value' => json_encode($data),
                        'thumbnail' =>  $request->file('thumbnail')->store('setting', 'public')
                    ]);
                }
            }
        }
        return back()->with('status', 'Successfully Edited');
    }

     public function sit(Request $request)
    {
        $data = [
            'title' => $request->title,
            'content' => $request->content,
        ];
        // $thumbnail =
        $setting = Page::where('key', 'sit')->first();
        if(!$setting){
            if(!$request->file('thumbnail') || $request->file('thumbnail') == null){
                 Page::create([
                    'key' => 'sit',
                    'value' => json_encode($data)
                ]);
            }else{
                Page::create([
                    'key' => 'sit',
                    'value' => json_encode($data),
                    'thumbnail' =>  $request->file('thumbnail')->store('setting', 'public')
                ]);
            }
        }else{
            if(!$request->file('thumbnail')){
                $setting->update([
                    'value' => json_encode($data)
                ]);
            }else if($request->file('thumbnail')){
                $file_path = Storage::url($setting->thumbnail);
                $path = str_replace('\\', '/', public_path());
                if($setting->thumbnail == null){
                     $setting->update([
                    'thumbnail' =>  $request->file('thumbnail')->store('setting', 'public')
                ]);
                }else if (file_exists($path . $file_path)) {
                    unlink($path . $file_path);
                    $setting->update([
                        'value' => json_encode($data),
                        'thumbnail' =>  $request->file('thumbnail')->store('setting', 'public')
                    ]);
                }
            }
        }
        return back()->with('status', 'Successfully Edited');
    }

    public function sithree(Request $request)
    {
         $json = [
            'title' => $request->title,
            'content' => $request->content,
        ];

        $setting = Page::where('key', 'sithree')->first();
        if(!$setting && $request->key == null){
            Page::create([
                'key' => 'sithree',
                'value' => json_encode($json)
            ]);
                 return back()->with('status', 'Successfully Edited');
        }else if($request->key){
            $setting->update([
                'value' => json_encode($json)
            ]);
            return back()->with('status', 'Successfully Edited');
        }

    }
    
    public function sif(Request $request)
    {
         $json = [
            'title' => $request->title,
            'content' => $request->content,
        ];

        $setting = Page::where('key', 'sif')->first();
        if(!$setting && $request->key == null){
            Page::create([
                'key' => 'sif',
                'value' => json_encode($json)
            ]);
                 return back()->with('status', 'Successfully Edited');
        }else if($request->key){
            $setting->update([
                'value' => json_encode($json)
            ]);
            return back()->with('status', 'Successfully Edited');
        }

    }

    public function siv(Request $request)
    {
         $json = [
            'title' => $request->title,
            'content' => $request->content,
        ];

        $setting = Page::where('key', 'siv')->first();
        if(!$setting && $request->key == null){
            Page::create([
                'key' => 'siv',
                'value' => json_encode($json)
            ]);
                 return back()->with('status', 'Successfully Edited');
        }else if($request->key){
            $setting->update([
                'value' => json_encode($json)
            ]);
            return back()->with('status', 'Successfully Edited');
        }

    }

    public function six(Request $request)
    {
         $json = [
            'title' => $request->title,
            'content' => $request->content,
        ];

        $setting = Page::where('key', 'six')->first();
        if(!$setting && $request->key == null){
            Page::create([
                'key' => 'six',
                'value' => json_encode($json)
            ]);
                 return back()->with('status', 'Successfully Edited');
        }else if($request->key){
            $setting->update([
                'value' => json_encode($json)
            ]);
            return back()->with('status', 'Successfully Edited');
        }

    }

    public function sis(Request $request)
    {
         $json = [
            'title' => $request->title,
            'content' => $request->content,
        ];

        $setting = Page::where('key', 'sis')->first();
        if(!$setting && $request->key == null){
            Page::create([
                'key' => 'sis',
                'value' => json_encode($json)
            ]);
                 return back()->with('status', 'Successfully Edited');
        }else if($request->key){
            $setting->update([
                'value' => json_encode($json)
            ]);
            return back()->with('status', 'Successfully Edited');
        }

    }

    public function sie(Request $request)
    {
        $data = [
            'title' => $request->title,
            'content' => $request->content,
        ];
        // $thumbnail =
        $setting = Page::where('key', 'sie')->first();
        if(!$setting){
            if(!$request->file('thumbnail') || $request->file('thumbnail') == null){
                 Page::create([
                    'key' => 'sie',
                    'value' => json_encode($data)
                ]);
            }else{
                Page::create([
                    'key' => 'sie',
                    'value' => json_encode($data),
                    'thumbnail' =>  $request->file('thumbnail')->store('setting', 'public')
                ]);
            }
        }else{
            if(!$request->file('thumbnail')){
                $setting->update([
                    'value' => json_encode($data)
                ]);
            }else if($request->file('thumbnail')){
                $file_path = Storage::url($setting->thumbnail);
                $path = str_replace('\\', '/', public_path());
                if($setting->thumbnail == null){
                     $setting->update([
                    'thumbnail' =>  $request->file('thumbnail')->store('setting', 'public')
                ]);
                }else if (file_exists($path . $file_path)) {
                    unlink($path . $file_path);
                    $setting->update([
                        'value' => json_encode($data),
                        'thumbnail' =>  $request->file('thumbnail')->store('setting', 'public')
                    ]);
                }
            }
        }
        return back()->with('status', 'Successfully Edited');
    }

    public function sin(Request $request)
    {
        $data = [
            'title' => $request->title,
            'content' => $request->content,
        ];
        // $thumbnail =
        $setting = Page::where('key', 'sin')->first();
        if(!$setting){
            if(!$request->file('thumbnail') || $request->file('thumbnail') == null){
                 Page::create([
                    'key' => 'sin',
                    'value' => json_encode($data)
                ]);
            }else{
                Page::create([
                    'key' => 'sin',
                    'value' => json_encode($data),
                    'thumbnail' =>  $request->file('thumbnail')->store('setting', 'public')
                ]);
            }
        }else{
            if(!$request->file('thumbnail')){
                $setting->update([
                    'value' => json_encode($data)
                ]);
            }else if($request->file('thumbnail')){
                $file_path = Storage::url($setting->thumbnail);
                $path = str_replace('\\', '/', public_path());
                if($setting->thumbnail == null){
                     $setting->update([
                    'thumbnail' =>  $request->file('thumbnail')->store('setting', 'public')
                ]);
                }else if (file_exists($path . $file_path)) {
                    unlink($path . $file_path);
                    $setting->update([
                        'value' => json_encode($data),
                        'thumbnail' =>  $request->file('thumbnail')->store('setting', 'public')
                    ]);
                }
            }
        }
        return back()->with('status', 'Successfully Edited');
    }

    public function spg(Request $request)
    {
        $setting = Page::where('key', 'spg')->first();
         if(!$setting){
            Page::create([
                'key' => 'spg',
                'thumbnail' => $request->file('thumbnail')->store('setting', 'public')
            ]);
            
        }else{
            $file_path = Storage::url($setting->thumbnail);
            $path = str_replace('\\', '/', public_path());
            if (file_exists($path . $file_path)) {
                    unlink($path . $file_path);
                    $setting->update([
                        'thumbnail' =>  $request->file('thumbnail')->store('setting', 'public')
                    ]);
            }
        }

        return back()->with('status', 'Successfully Edited');
    }

     public function gio(Request $request)
    {
        $data = [
            'title' => $request->title,
            'content' => $request->content,
        ];
        // $thumbnail =
        $setting = Page::where('key', 'gio')->first();
        if(!$setting){
            if(!$request->file('thumbnail') || $request->file('thumbnail') == null){
                 Page::create([
                    'key' => 'gio',
                    'value' => json_encode($data)
                ]);
            }else{
                Page::create([
                    'key' => 'gio',
                    'value' => json_encode($data),
                    'thumbnail' =>  $request->file('thumbnail')->store('setting', 'public')
                ]);
            }
        }else{
            if(!$request->file('thumbnail')){
                $setting->update([
                    'value' => json_encode($data)
                ]);
            }else if($request->file('thumbnail')){
                $file_path = Storage::url($setting->thumbnail);
                $path = str_replace('\\', '/', public_path());
                if($setting->thumbnail == null){
                     $setting->update([
                    'thumbnail' =>  $request->file('thumbnail')->store('setting', 'public')
                ]);
                }else if (file_exists($path . $file_path)) {
                    unlink($path . $file_path);
                    $setting->update([
                        'value' => json_encode($data),
                        'thumbnail' =>  $request->file('thumbnail')->store('setting', 'public')
                    ]);
                }
            }
        }
        return back()->with('status', 'Successfully Edited');
    }

     public function git(Request $request)
    {
        $data = [
            'title' => $request->title,
            'content' => $request->content,
        ];
        // $thumbnail =
        $setting = Page::where('key', 'git')->first();
        if(!$setting){
            if(!$request->file('thumbnail') || $request->file('thumbnail') == null){
                 Page::create([
                    'key' => 'git',
                    'value' => json_encode($data)
                ]);
            }else{
                Page::create([
                    'key' => 'git',
                    'value' => json_encode($data),
                    'thumbnail' =>  $request->file('thumbnail')->store('setting', 'public')
                ]);
            }
        }else{
            if(!$request->file('thumbnail')){
                $setting->update([
                    'value' => json_encode($data)
                ]);
            }else if($request->file('thumbnail')){
                $file_path = Storage::url($setting->thumbnail);
                $path = str_replace('\\', '/', public_path());
                if($setting->thumbnail == null){
                     $setting->update([
                    'thumbnail' =>  $request->file('thumbnail')->store('setting', 'public')
                ]);
                }else if (file_exists($path . $file_path)) {
                    unlink($path . $file_path);
                    $setting->update([
                        'value' => json_encode($data),
                        'thumbnail' =>  $request->file('thumbnail')->store('setting', 'public')
                    ]);
                }
            }
        }
        return back()->with('status', 'Successfully Edited');
    }

    public function githree(Request $request)
    {
        $data = [
            'title' => $request->title,
            'content' => $request->content,
        ];
        // $thumbnail =
        $setting = Page::where('key', 'githree')->first();
        if(!$setting){
            if(!$request->file('thumbnail') || $request->file('thumbnail') == null){
                 Page::create([
                    'key' => 'githree',
                    'value' => json_encode($data)
                ]);
            }else{
                Page::create([
                    'key' => 'githree',
                    'value' => json_encode($data),
                    'thumbnail' =>  $request->file('thumbnail')->store('setting', 'public')
                ]);
            }
        }else{
            if(!$request->file('thumbnail')){
                $setting->update([
                    'value' => json_encode($data)
                ]);
            }else if($request->file('thumbnail')){
                $file_path = Storage::url($setting->thumbnail);
                $path = str_replace('\\', '/', public_path());
                if($setting->thumbnail == null){
                     $setting->update([
                    'thumbnail' =>  $request->file('thumbnail')->store('setting', 'public')
                ]);
                }else if (file_exists($path . $file_path)) {
                    unlink($path . $file_path);
                    $setting->update([
                        'value' => json_encode($data),
                        'thumbnail' =>  $request->file('thumbnail')->store('setting', 'public')
                    ]);
                }
            }
        }
        return back()->with('status', 'Successfully Edited');
    }

    public function gif(Request $request)
    {
         $json = [
            'title' => $request->title,
            'content' => $request->content,
        ];

        $setting = Page::where('key', 'gif')->first();
        if(!$setting && $request->key == null){
            Page::create([
                'key' => 'gif',
                'value' => json_encode($json)
            ]);
                 return back()->with('status', 'Successfully Edited');
        }else if($request->key){
            $setting->update([
                'value' => json_encode($json)
            ]);
        }
        return back()->with('status', 'Successfully Edited');

    }

     public function giv(Request $request)
    {
        $data = [
            'title' => $request->title,
            'content' => $request->content,
        ];
        // $thumbnail =
        $setting = Page::where('key', 'giv')->first();
        if(!$setting){
            if(!$request->file('thumbnail') || $request->file('thumbnail') == null){
                 Page::create([
                    'key' => 'giv',
                    'value' => json_encode($data)
                ]);
            }else{
                Page::create([
                    'key' => 'giv',
                    'value' => json_encode($data),
                    'thumbnail' =>  $request->file('thumbnail')->store('setting', 'public')
                ]);
            }
        }else{
            if(!$request->file('thumbnail')){
                $setting->update([
                    'value' => json_encode($data)
                ]);
            }else if($request->file('thumbnail')){
                $file_path = Storage::url($setting->thumbnail);
                $path = str_replace('\\', '/', public_path());
                if($setting->thumbnail == null){
                     $setting->update([
                    'thumbnail' =>  $request->file('thumbnail')->store('setting', 'public')
                ]);
                }else if (file_exists($path . $file_path)) {
                    unlink($path . $file_path);
                    $setting->update([
                        'value' => json_encode($data),
                        'thumbnail' =>  $request->file('thumbnail')->store('setting', 'public')
                    ]);
                }
            }
        }
        return back()->with('status', 'Successfully Edited');
    }

     public function gix(Request $request)
    {
        $data = [
            'title' => $request->title,
            'content' => $request->content,
        ];
        // $thumbnail =
        $setting = Page::where('key', 'gix')->first();
        if(!$setting){
            if(!$request->file('thumbnail') || $request->file('thumbnail') == null){
                 Page::create([
                    'key' => 'gix',
                    'value' => json_encode($data)
                ]);
            }else{
                Page::create([
                    'key' => 'gix',
                    'value' => json_encode($data),
                    'thumbnail' =>  $request->file('thumbnail')->store('setting', 'public')
                ]);
            }
        }else{
            if(!$request->file('thumbnail')){
                $setting->update([
                    'value' => json_encode($data)
                ]);
            }else if($request->file('thumbnail')){
                $file_path = Storage::url($setting->thumbnail);
                $path = str_replace('\\', '/', public_path());
                if($setting->thumbnail == null){
                     $setting->update([
                    'thumbnail' =>  $request->file('thumbnail')->store('setting', 'public')
                ]);
                }else if (file_exists($path . $file_path)) {
                    unlink($path . $file_path);
                    $setting->update([
                        'value' => json_encode($data),
                        'thumbnail' =>  $request->file('thumbnail')->store('setting', 'public')
                    ]);
                }
            }
        }
        return back()->with('status', 'Successfully Edited');
    }


}
