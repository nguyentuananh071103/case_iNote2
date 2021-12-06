<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    //
    public function showFormLogin()
    {
        return view('backend.auth.login');
    }

    public function login(Request $request)
    {
        $data = $request->only('email','password');
        if (Auth::attempt($data)) {
            return redirect()->route('notes.list')->with('message','Đăng nhập thành công');

        } else {
            dd("Login Fail");
        }
    }

    public function logout()
    {
        flush();
        Auth::logout();
        return redirect()->route('admin.showFormLogin');
    }

    public function showFormRegister()
    {
        return view('backend.auth.register');
    }

    public function register(Request $request)
    {
        $data = $request->only('name','email','password');
        $data["password"] = Hash::make($request->password);
        User::query()->create($data);
        return redirect()->route("admin.showFormLogin")->with('message','Đăng ký thành công rực rỡ');
    }
}
