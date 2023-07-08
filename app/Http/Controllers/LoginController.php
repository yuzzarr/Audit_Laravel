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
        $user = User::where('nip','=',$request->nip)->first();
        $admin = User::join('administrator', 'user.id','=','administrator.id_User')->get([
            'user.nip','user.password'
        ])->where('nip','=', $request->nip)->first();

        $auditee = DB::table('user')->join('auditee', 'user.id','=','auditee.id_User')->join('file_setup', 'auditee.id_Auditee', '=', 'file_setup.id_Auditee')->get([
            'user.nip','user.password','auditee.id_Auditee', 'file_setup.id_Auditee'
        ])->where('nip','=', $request->nip)->first();

        $auditor = DB::table('user')->join('auditor', 'user.id','=','auditor.id_User')->join('periode_unit', 'auditor.id_Periode_unit', '=', 'periode_unit.id_Periode_unit')->get([
            'user.nip','user.password', 'auditor.id_Periode_unit', 'periode_unit.master_auditor'
        ])->where('nip','=', $request->nip)->first();

        if($admin && $request->password == $admin->password){
            Auth::login($user);
            $request->session()->regenerate();

            return redirect()->intended('Home');
        } elseif($auditee && $request->password == $auditee->password){
            session(['id_Auditee' => $auditee->id_Auditee]);
            if (session()->has('id_Auditee')) {
                Auth::login($user);

                return redirect()->intended('Proses_audit');
            } else {
                return redirect()->intended('login');
            }
        } elseif($auditor && $request->password == $auditor->password){
            session(['id_periode_unit' => $auditor->id_Periode_unit]);
            if (session()->has('id_periode_unit')) {
                if($auditor->nip == $auditor->master_auditor){
                    Auth::login($user);

                    return redirect()->intended('HomeMasterAuditor');
                } else{
                    Auth::login($user);

                    return redirect()->intended('Setup_file2');
                    // echo "Anggota Auditor dengan session ", session('id_periode_unit');
                }
            } else {
                return redirect()->intended('login');
            }
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


