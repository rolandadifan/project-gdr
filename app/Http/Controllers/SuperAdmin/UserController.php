<?php

namespace App\Http\Controllers\superadmin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function index()
    {
        $users = User::where('role', 'student')->orderBy('created_at', 'desc')->get();
        return view('superadmin.pages.user.member.index')->with([
            'users' => $users
        ]);
    }

    public function edit($id)
    {
        $user = User::with('userDetail')->findOrFail($id);
        return view('superadmin.pages.user.member.info')->with([
            'user' => $user
        ]);
    }

    public function update(Request $request, $id)
    {
        $name = $request->name;
        $telephone = $request->telephone;
        $address = $request->address;
        $user = User::findOrFail($id);
        $user->update([
            'name' => $name,
            'telephone' => $telephone
        ]);
        $user_detail = UserDetail::where('user_id', $user->id)->first();
        if(!$user_detail){
            UserDetail::create([
                'user_id' => $user->id,
                'status_id' => 1,
                'address' => $address
            ]);
        }else{
            $user_detail->update([
                'address' => $address
            ]);
        }
        return redirect()->route('user.index')->with('status', 'successfully updated');

     
    }

    public function destroy($id)
    {
        try {
            //code...
            User::findOrFail($id)->delete();
            return redirect()->back()->with('status', 'successfully delete');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('status', 'oops there something wrong!!');
        }
    }
    
}
