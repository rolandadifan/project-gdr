<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index()
    {
        return view('superadmin.pages.profile.index');
    }

    public function update(Request $request)
    {
        if ($request->password == null) {
            $data = $request->except(['password']);
            $file_path = Storage::url(Auth()->user()->avatar);
            $path = str_replace('\\', '/', public_path());
            if ($request->hasFile('avatar') && Auth()->user()->avatar == null) {
                $data['avatar'] = $request->file('avatar')->store('profile', 'public');
                $user = User::findOrFail(Auth()->user()->id);
                $user->update($data);
                return back()->with('status', 'successfuly updated');
            } else if (!$request->hasFile('avatar')) {
                $data = $request->except(['password', 'avatar']);
                $user = User::findOrFail(Auth()->user()->id);
                $user->update($data);
                return back()->with('status', 'successfuly updated');
            } else if (file_exists($path . $file_path)) {
                unlink($path . $file_path);
                $data['avatar'] = $request->file('avatar')->store('profile', 'public');
                $user = User::findOrFail(Auth()->user()->id);
                $user->update($data);
                return back()->with('status', 'successfuly updated');
            }
            // $user = User::findOrFail(Auth()->user()->id);
            // $user->update($data);
            // return back()->with('status', 'successfuly updated');
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
            return back()->with('status', 'successfuly updated');;
        }
    }
}
