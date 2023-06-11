<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserController extends Controller
{
    public function Home(){
        $user = DB::table('user')->get();

        return view('Home.Home', compact('user'));
    }

    public function Tambah(){
        return view('Home.Tambah');
    }

    public function Store(Request $request){
        DB::table('user')->insert([
            'nama' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'no_telp' => $request->no_telp,
            'password' => $request->password,
            'nip' => $request->nip
        ]);

        return redirect('Home');
    }
}
