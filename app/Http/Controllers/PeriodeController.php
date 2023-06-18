<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Periode;

class PeriodeController extends Controller
{
    public function Admin(){
        $periode = DB::table('periode')->get();

        return view('Admin.Admin', compact('periode'));
    }
    
    public function Tambah_AMI(){
        return view('Admin.Tambah_AMI');
    }

    public function Setup_periode(Request $request){
        DB::table('periode')->insert([
            'tanggal_periode' => $request->tgl_periode,
            'no_sk' => $request->no_sk,
            'file_sk' => $request->file_sk,
            'ketua_spi' => $request->ketua_spi,
            'nip_ketua_spi' => $request->nip_ketua_spi
        ]);

        return redirect('Admin');
    }

}
