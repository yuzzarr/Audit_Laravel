<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Periode;
use App\Models\User;

class PeriodeController extends Controller
{
    public function Periode(){
        $periode = DB::table('periode')->get();

        return view('Admin.Setup_periode', compact('periode'));
    }
    
    /*public function Tambah_AMI(){
        return view('Admin.Tambah_AMI');
    }*/

    public function Tambah1(){
        return view('Admin.Tambah-periode');
    }

    public function Setup_periode(Request $request){
        DB::table('periode')->insert([
            'tanggal_periode' => $request->tanggal_periode,
            'no_sk' => $request->no_sk,
            'file_sk' => $request->file_sk,
            'ketua_spi' => $request->ketua_spi,
            'nip_ketua_spi' => $request->nip_ketua_spi
        ]);

        return redirect('Periode');
    }

    public function Hapus1(string $id_Periode){
        $user = DB::table('periode')->where('id_Periode',$id_Periode)->delete();
        return redirect('Admin');
    }

    public function Edit1(String $id_Periode)
    {
        $model = DB::table('periode')->where('id_Periode', $id_Periode)->get();

        return view('Admin.Edit1', compact('model'));
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
        

        
            return redirect('Admin');    
        
    }

}
