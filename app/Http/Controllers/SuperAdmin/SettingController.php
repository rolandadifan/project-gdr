<?php

namespace App\Http\Controllers\superadmin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SettingController extends Controller
{
    public function index()
    {
        $settings = Setting::get();
        return view('superadmin.pages.setting.index')->with([
            'settings' => $settings
        ]);
    }
    public function edit($key)
    {
        $setting = Setting::where('key',$key)->first();
        return view('superadmin.pages.setting.edit')->with(['setting'=>$setting]);
    }

    public function update(Request $request, $key)
    {
        if (!$request->thumbnail || $request->thumbnail == null) {
            $setting['value'] = $request->input('value');
            $settingDB = Setting::where('key',$key)->first();
            $settingDB->update($setting);
            return back()->with('status', 'Setting Successfuly Updated');
        } else {
            $settingDB = Setting::where('key',$key)->first();

            if($settingDB->thumbnail == null){
                $setting['value'] = $request->input('value');
                $setting['thumbnail'] = $request->file('thumbnail')->store('setting', 'public');;
                $settingDB = Setting::where('key',$key)->first();
                $settingDB->update($setting);
            }else{
                $file_path = Storage::url($settingDB->thumbnail);
                $path = str_replace('\\', '/', public_path());
                if (file_exists($path . $file_path)) {
                    unlink($path . $file_path);
                }
                $setting['value'] = $request->input('value');
                $setting['thumbnail'] = $request->file('thumbnail')->store('setting', 'public');;
                $settingDB = Setting::where('key',$key)->first();
                $settingDB->update($setting);
            }
            return back()->with('status', 'Setting Successfuly Updated');
        }
    }
}