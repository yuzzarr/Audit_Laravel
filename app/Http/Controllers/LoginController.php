<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class LoginController extends Controller
{
    public function Login()
    {
        if (Auth::check()) {
            return redirect('Home');
        }else{
            return view('Home.Login');
        }
    }

    public function actionLogin(Request $request)
    {
        $admin = [
            'nip' => $request->input('nip'),
            'password' => $request->input('password'),
        ];

        $auditor = [
            'nip' => $request->input('nip'),
            'password' => $request->input('password'),
        ];

        $auditee = [
            'nip' => $request->input('nip'),
            'password' => $request->input('password'),
        ];

        if (Auth::Attempt($admin)) {
            return redirect('Home');
        }else if(Auth::Attempt($auditor)){
            return redirect('Auditor');
        }else if(Auth::Attempt($auditee)){
            return redirect('Auditee');
        }
        else{
            Session::flash('error', 'NIP atau Password Tidak Sesuai');
            return redirect('/');
        }
    }

    public function actionLogout()
    {
        Auth::logout();
        return redirect('/');
    }
}

