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
            return view('Login');
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
        $admin = User::join('administrator', 'user.id','=','administrator.id_User')->get([
            'user.nip','user.password'
        ])->where('nip','=', $request->nip)->first();

        $auditee = User::join('auditee', 'user.id','=','auditee.id_User')->get([
            'user.nip','user.password'
        ])->where('nip','=', $request->nip)->first();

        $auditor = User::join('auditor', 'user.id','=','auditor.id_User')->get([
            'user.nip','user.password'
        ])->where('nip','=', $request->nip)->first();

        if($admin && $request->password == $admin->password){
            Auth::login($user);
            $request->session()->regenerate();

            return redirect()->intended('Home');
        } elseif($auditee && $request->password == $auditee->password){
            return "Auditee";
        } elseif($auditor && $request->password == $auditor->password){
            return "Auditor";
        } else {
            return redirect()->intended('Login')->with('alert');
        }
    }

    public function logout(Request $request){
        Session::flush();
        Auth::logout();

        return redirect('');
    }
}


