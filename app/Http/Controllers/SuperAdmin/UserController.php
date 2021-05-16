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
        $user = User::findOrFail($id);
        return view('superadmin.pages.user.member.info')->with([
            'user' => $user
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $user = User::findOrFail($id);
        $user->update($data);
        return redirect()->route('user.index')->with('status', 'successfully updated');

     
    }
}
