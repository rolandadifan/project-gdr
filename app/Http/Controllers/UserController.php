<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function profile()
    {
        return view('member.profile.profile');
    }

    public function viewProfile()
    {
        return view('member.profile.edit-profile');
    }

    public function update(Request $request)
    {
        // $data = $request->all();
        // if ($request->hasFile('avatar')) {
        //     $file_path = Storage::url(Auth()->user()->avatar);
        //     $path = str_replace('\\', '/', public_path());
        //     // dd($path . $file_path);
        //     if (file_exists($path . $file_path)) {
        //         unlink($path . $file_path);
        //     }
        //     $data['avatar'] = $request->file('avatar')->store('profile', 'public');
        // }
        // $user = User::findOrFail(Auth()->user()->id);
        // $user->update($data);
        // return back();
        if ($request->password == null) {
            $data = $request->except(['password']);
            if ($request->hasFile('avatar')) {
                $file_path = Storage::url(Auth()->user()->avatar);
                $path = str_replace('\\', '/', public_path());
                // dd($path . $file_path);
                if (file_exists($path . $file_path)) {
                    unlink($path . $file_path);
                }
                $data['avatar'] = $request->file('avatar')->store('profile', 'public');
            }
            $user = User::findOrFail(Auth()->user()->id);
            $user->update($data);
            Alert::success('Success', 'Your Profile Updated');
            return back();
        } else {
            $data = $request->validate([
                'password' => 'string|confirmed|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/',
                'password_confirmation' => 'required',
            ]);
            $data['password'] = bcrypt($request->password);
            if ($request->hasFile('avatar')) {
                $file_path = Storage::url(Auth()->user()->avatar);
                $path = str_replace('\\', '/', public_path());
                // dd($path . $file_path);
                if (file_exists($path . $file_path)) {
                    unlink($path . $file_path);
                }
                $data['avatar'] = $request->file('avatar')->store('profile', 'public');
            }
            $user = User::findOrFail(Auth()->user()->id);
            $user->update($data);
            Alert::success('Success', 'Your Profile Updated');
            return back();
        }
    }
}
