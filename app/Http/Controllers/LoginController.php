<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\LoginRequest;
use Session;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function Login()
    {
        if (Auth::check()){
            return redirect('Home');
        } else {
            return view('Home.Login');
        }
    }

    public function actionLogin(Request $request)
    {
        // $userdata = [
        //     'nip' => $request->input('email'),
        //     'password' => $request->input('password'),
        // ];

        // if(Auth::Attempt($userdata)){
        //     return redirect('Home');
        // } else {
        //     Return "error";
        // }

        // $request->validate([
        //     'nip' => 'required',
        //     'password' => 'required',
        // ]);

        $user = User::where('nip','=',$request->nip)->first();
        if($user && $request->password == $user->password){
            Auth::login($user);
            $request->session()->regenerate();

            return redirect()->intended('Home');
        } else {
            return redirect()->intended('Login')->with('alert');
        }
    }

    public function logout(Request $request){
        Session::flush();
        Auth::logout();

        return redirect('Login');
    }
}


