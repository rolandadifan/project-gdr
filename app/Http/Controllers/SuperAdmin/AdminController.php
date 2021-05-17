<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminReqeust;
use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::where('role', 'admin')->orWhere('role', 'sadmin')->get();
        return view('superadmin.pages.user.index')->with([
            'users' => $users
        ]);
    }

    public function store(AdminReqeust $request)
    {
        // $this->validate($request,[
        //     'name' => ['required', 'min:3', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        //     'password' => ['required', 'string', 'min:8', 'confirmed'],
        //     'address' => ['required','string', 'min:3', 'max:255'],
        //     'telephone' => ['required','integer'],
        //  ]);
      

         $password = $request->password;
         $passwordhash = bcrypt($password);

         User::create([
             'name' => $request->name,
             'email' => $request->email,
             'password' => $passwordhash,
             'address' => $request->address,
             'telephone' => $request->telephone,
             'role' => $request->role,
         ]);
         return redirect()->back()->with('status','successfuly create admin');
    }

    public function edit($id){
        $user = User::with('userDetail')->findOrFail($id);
        return view('superadmin.pages.user.update')->with([
            'user' => $user
        ]);
    }

    public function update(Request $request, $id)
    {
        $name = $request->name;
        $telephone = $request->telephone;
        $address = $request->address;
        $role = $request->role;
        $user = User::findOrFail($id);
        $user->update([
            'name' => $name,
            'telephone' => $telephone,
            'role' => $role
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
        return redirect()->back()->with('status','successfuly update');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->back()->with('status','successfuly delete admin');
    }
}
