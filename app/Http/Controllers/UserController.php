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

        return view('Home.Home', compact('user'));
    }

    public function Setup_periode(){
        //$user = DB::table('user')->get();
        $periode = DB::table('periode')->get();

        return view('Admin.Setup_periode',compact('periode'));
    }

    public function Tambah(){
        return view('Home.Tambah');
    }

    public function Tambah1(){
        return view('Admin.Tambah-periode');
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

    public function Store1(Request $request){
        DB::table('periode')->insert([
            'tanggal_periode' => $request->tanggal_periode,
            'no_sk' => $request->no_sk,
            'file_sk' => $request->file_sk,
            'ketua_spi' => $request->ketua_spi,
            'nip_ketua_spi' => $request->nip_ketua_spi
        ]);

        return redirect('Setup_periode');
    }

    public function Hapus(string $id){
        $user = DB::table('user')->where('id',$id)->delete();
        return redirect('Home');
    }

    public function Hapus1(string $id_Periode){
        $user = DB::table('periode')->where('id_Periode',$id_Periode)->delete();
        return redirect('Home');
    }

    public function Edit($id)
    {
        $model = DB::table('user')->where('id', $id)->get();

        return view('Home.Edit', compact('model'));
    }

    public function Edit1(String $id_Periode)
    {
        $model = DB::table('periode')->where('id_Periode', $id_Periode)->get();

        return view('Admin.Edit1', compact('model'));
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

    public function Update1(Request $request, String $id_Periode)
    {
        DB::table('periode')->where('id_Periode', $id_Periode)->update([
            'tanggal_periode' => $request->tanggal_periode,
            'no_sk' => $request->no_sk,
            'file_sk' => $request->file_sk,
            'ketua_spi' => $request->ketua_spi,
            'nip_ketua_spi' => $request->nip_ketua_spi
        ]);
        

        
            return redirect('Home');    
        
    }
}
