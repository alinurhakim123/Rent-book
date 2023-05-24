<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
        public function indexRegister(){
            return view('Auth.register1');
        }

        public function storeRegister(Request $request)
        {
            $credentials = $request->validate([
                'name' => 'required',
                'email' => 'required',
                'password' => 'required',
                'phone' => 'required',
                'addres' => 'required',
            ]);

        $credentials['password'] = bcrypt($credentials['password']);
        user::create($credentials);
        return redirect('login');
        }

        public function indexLogin(){
            return view('Auth.login');
        }

        public function storeLogin(Request $request)
        {
            $login = $request->validate([
                'email' => 'required',
                'password' => 'required',
            ]);

            if(Auth::attempt($login))
            {
                $request->session()->regenerate();
                return redirect()->intended('dashboard');
            }

            return back()->with('LoginError', 'Login gagal Silahkan masukan password dengan benar');
        }
}
