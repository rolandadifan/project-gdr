<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class ProfileController extends Controller
{
    public function index()
    {
        $users = UserDetail::where('user_id', Auth()->user()->id)->first();
        return view('superadmin.pages.profile.index')->with([
            'users' => $users
        ]);
    }

    public function update(Request $request)
    {
        // if ($request->password == null) {
        //     $data = $request->except(['password']);
        //     $file_path = Storage::url(Auth()->user()->avatar);
        //     $path = str_replace('\\', '/', public_path());
        //     if ($request->hasFile('avatar') && Auth()->user()->avatar == null) {
        //         $data['avatar'] = $request->file('avatar')->store('profile', 'public');
        //         $user = User::findOrFail(Auth()->user()->id);
        //         $user->update($data);
        //         return back()->with('status', 'successfuly updated');
        //     } else if (!$request->hasFile('avatar')) {
        //         $data = $request->except(['password', 'avatar']);
        //         $user = User::findOrFail(Auth()->user()->id);
        //         $user->update($data);
        //         return back()->with('status', 'successfuly updated');
        //     } else if (file_exists($path . $file_path)) {
        //         unlink($path . $file_path);
        //         $data['avatar'] = $request->file('avatar')->store('profile', 'public');
        //         $user = User::findOrFail(Auth()->user()->id);
        //         $user->update($data);
        //         return back()->with('status', 'successfuly updated');
        //     }
        //     // $user = User::findOrFail(Auth()->user()->id);
        //     // $user->update($data);
        //     // return back()->with('status', 'successfuly updated');
        // } else {
        //     $data = $request->validate([
        //         'password' => 'string|confirmed|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/',
        //         'password_confirmation' => 'required',
        //     ]);
        //     $data['password'] = bcrypt($request->password);
        //     if ($request->hasFile('avatar')) {
        //         $file_path = Storage::url(Auth()->user()->avatar);
        //         $path = str_replace('\\', '/', public_path());
        //         // dd($path . $file_path);
        //         if (file_exists($path . $file_path)) {
        //             unlink($path . $file_path);
        //         }
        //         $data['avatar'] = $request->file('avatar')->store('profile', 'public');
        //     }
        //     $user = User::findOrFail(Auth()->user()->id);
        //     $user->update($data);
        //     return back()->with('status', 'successfuly updated');;
        // }

           if($request->input('password') == null){
            $request->except(['password']);
            $user = User::findOrFail(Auth()->user()->id);
            $user->update([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'telephone' => $request->input('telephone'),
                ]);
            $user_detail = UserDetail::where('user_id', Auth()->user()->id)->first();
            if(!$user_detail ){
                    $data_avatar = $request->file('avatar')->store('profile', 'public');
                    UserDetail::create([
                        'user_id' => Auth()->user()->id,
                        'status_id' => 1,
                        'address' => $request->input('address'),
                        'avatar' => $data_avatar
                    ]);
                    Alert::success('Success', 'Your Profile Updated');
                    return back();
            }else{
                if($request->hasFile('avatar')){
                    $file_path = Storage::url($user_detail->avatar);
                    $path = str_replace('\\', '/', public_path());
                    if (file_exists($path . $file_path)) {
                        unlink($path . $file_path);
                    }
                    $data_avatar = $request->file('avatar')->store('profile', 'public');
                    $user_detail->update([
                       'user_id' => Auth()->user()->id,
                        'status_id' => 1,
                        'address' => $request->input('address'),
                        'avatar' => $data_avatar 
                    ]);
                    Alert::success('Success', 'Your Profile Updated');
                    return back();
                }else if(!$request->hasFile('avatar')){
                     $user_detail->update([
                       'user_id' => Auth()->user()->id,
                        'status_id' => 1,
                        'address' => $request->input('address'),
                    ]);
                    Alert::success('Success', 'Your Profile Updated');
                    return back();
                }
            }
        }else{
            $password = $request->validate([
                'password' => 'string|confirmed|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/',
                'password_confirmation' => 'required',
            ]);
            $password= bcrypt($request->password);
             $user = User::findOrFail(Auth()->user()->id);
            $user->update([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'telephone' => $request->input('telephone'),
                'password' => $password
            ]);
            $user_detail = UserDetail::where('user_id', Auth()->user()->id)->first();
            if(!$user_detail ){
                    $data_avatar = $request->file('avatar')->store('profile', 'public');
                    UserDetail::create([
                        'user_id' => Auth()->user()->id,
                        'status_id' => 1,
                        'address' => $request->input('address'),
                        'avatar' => $data_avatar
                    ]);
                    Alert::success('Success', 'Your Profile Updated');
                    return back();
            }else{
                if($request->hasFile('avatar')){
                    $file_path = Storage::url($user_detail->avatar);
                    $path = str_replace('\\', '/', public_path());
                    if (file_exists($path . $file_path)) {
                        unlink($path . $file_path);
                    }
                    $data_avatar = $request->file('avatar')->store('profile', 'public');
                    $user_detail->update([
                       'user_id' => Auth()->user()->id,
                        'status_id' => 1,
                        'address' => $request->input('address'),
                        'avatar' => $data_avatar 
                    ]);
                    Alert::success('Success', 'Your Profile Updated');
                    return back();
                }else if(!$request->hasFile('avatar')){
                     $user_detail->update([
                       'user_id' => Auth()->user()->id,
                        'status_id' => 1,
                        'address' => $request->input('address'),
                    ]);
                    Alert::success('Success', 'Your Profile Updated');
                    return back();
                }
            }
        }
    }
}
