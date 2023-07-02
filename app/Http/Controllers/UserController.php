<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\Periode;

class UserController extends Controller
{
    public function Home(){
        $user = DB::table('user')->get();
        //$periode = DB::table('periode')->get();

        return view('Admin.Home', compact('user'));
    }

    public function Tambah(){
        return view('Admin.Tambah');
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

    public function Edit($id)
    {
        $model = DB::table('user')->where('id', $id)->get();

        return view('Admin.Edit', compact('model'));
    }

    public function Update(Request $request, string $id)
    {
        DB::table('user')->where('id', $id)->update([
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
