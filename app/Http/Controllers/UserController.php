<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
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

    public function Hapus(string $id){
        $user = DB::table('user')->where('id',$id)->delete();
        return redirect('Home');
    }

    public function Edit(string $id)
    {
        $model = user::find($id)->get();

        return view('Home.Edit', compact('model'));
    }

    public function Update(Request $request, string $id)
    {
        DB::table('user')->update([
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
