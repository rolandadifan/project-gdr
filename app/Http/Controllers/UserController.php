<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Stmt\TryCatch;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'user']);
    }

    public function profile()
    {
        $user = UserDetail::where('user_id', Auth()->user()->id)->first();
        return view('member.profile.profile')->with([
            'user' => $user
        ]);
    }

    public function viewProfile()
    {
        $user = UserDetail::where('user_id', Auth()->user()->id)->first();
        return view('member.profile.edit-profile')->with([
            'user' => $user
        ]);
    }

    
    public function update(Request $request)
    {
        try {
            if($request->input('password') == null){
                $request->except(['password']);
                $user = User::findOrFail(Auth()->user()->id);
                $user->update([
                    'name' => $request->input('name'),
                    'telephone' => $request->input('telephone'),
                    ]);
                $user_detail = UserDetail::where('user_id', Auth()->user()->id)->first();
                if(!$user_detail ){
                        $data_avatar = $request->file('avatar')->store('profile', 'public');
                        UserDetail::create([
                            'user_id' => Auth()->user()->id,
                            'status_id' => 1,
                            'place_birth' => $request->input('place_birth'),
                            'date_birth' => $request->input('date_birth'),
                            'address' => $request->input('address'),
                            'gender' => $request->input('gender'),
                            'nationality' => $request->input('nationality'),
                            'province' => $request->input('province'),
                            'city' => $request->input('city'),
                            'country' => $request->input('country'),
                            'post_code' => $request->input('post_code'),
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
                            'place_birth' => $request->input('place_birth'),
                            'date_birth' => $request->input('date_birth'),
                            'address' => $request->input('address'),
                            'gender' => $request->input('gender'),
                            'nationality' => $request->input('nationality'),
                            'province' => $request->input('province'),
                            'city' => $request->input('city'),
                            'country' => $request->input('country'),
                            'post_code' => $request->input('post_code'),
                            'avatar' => $data_avatar 
                        ]);
                        Alert::success('Success', 'Your Profile Updated');
                        return back();
                    }else if(!$request->hasFile('avatar')){
                         $user_detail->update([
                           'user_id' => Auth()->user()->id,
                            'status_id' => 1,
                            'place_birth' => $request->input('place_birth'),
                            'date_birth' => $request->input('date_birth'),
                            'address' => $request->input('address'),
                            'gender' => $request->input('gender'),
                            'nationality' => $request->input('nationality'),
                            'province' => $request->input('province'),
                            'city' => $request->input('city'),
                            'country' => $request->input('country'),
                            'post_code' => $request->input('post_code'),
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
                    'telephone' => $request->input('telephone'),
                    'password' => $password
                ]);
                $user_detail = UserDetail::where('user_id', Auth()->user()->id)->first();
                if(!$user_detail ){
                        $data_avatar = $request->file('avatar')->store('profile', 'public');
                        UserDetail::create([
                            'user_id' => Auth()->user()->id,
                            'status_id' => 1,
                            'place_birth' => $request->input('place_birth'),
                            'date_birth' => $request->input('date_birth'),
                            'address' => $request->input('address'),
                            'gender' => $request->input('gender'),
                            'nationality' => $request->input('nationality'),
                            'province' => $request->input('province'),
                            'city' => $request->input('city'),
                            'country' => $request->input('country'),
                            'post_code' => $request->input('post_code'),
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
                            'place_birth' => $request->input('place_birth'),
                            'date_birth' => $request->input('date_birth'),
                            'address' => $request->input('address'),
                            'gender' => $request->input('gender'),
                            'nationality' => $request->input('nationality'),
                            'province' => $request->input('province'),
                            'city' => $request->input('city'),
                            'country' => $request->input('country'),
                            'post_code' => $request->input('post_code'),
                            'avatar' => $data_avatar 
                        ]);
                        Alert::success('Success', 'Your Profile Updated');
                        return back();
                    }else if(!$request->hasFile('avatar')){
                         $user_detail->update([
                           'user_id' => Auth()->user()->id,
                            'status_id' => 1,
                            'place_birth' => $request->input('place_birth'),
                            'date_birth' => $request->input('date_birth'),
                            'address' => $request->input('address'),
                            'gender' => $request->input('gender'),
                            'nationality' => $request->input('nationality'),
                            'province' => $request->input('province'),
                            'city' => $request->input('city'),
                            'country' => $request->input('country'),
                            'post_code' => $request->input('post_code'),
                        ]);
                        Alert::success('Success', 'Your Profile Updated');
                        return back();
                    }
                }
            }
        } catch (\Throwable $th) {
            Alert::error('Opps!', 'Something Went wrong');
            return back();
        }

    }
}
