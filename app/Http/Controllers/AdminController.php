<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function indexUser(){
        $data = User::get();
        return view('dashboard.user', compact('data'));
    }
    public function editUser($id)
    {
           $data=User::where('id',$id)->first();
        return view('dashboard.edit', compact('data'));
    }

    public function deleteUser($id)
    {
        User::where('id',$id)->delete();
        return redirect(route('user'));
    }


    public function update(Request $request, $id)
    {

        User::where('id', $id)->update([
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password,
            'address' => $request->address,
            'phone' => $request->phone,
        ]);

        return redirect(route('user'));
    }
}
