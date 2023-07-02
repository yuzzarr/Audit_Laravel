<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Periode;
use App\Models\Periode_unit;
use App\Models\Unit;
use App\Models\User;

class PeriodeController extends Controller
{
    //SETUP PERIODE AUDIT
    public function Periode(){
        $periode = DB::table('periode')->get();

        return view('Admin.Setup_periode', compact('periode'));
    }

    public function Tambah1(){
        return view('Admin.Tambah-periode');
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

    public function Hapus1(string $id_Periode){
        $user = DB::table('periode')->where('id_Periode',$id_Periode)->delete();
        return redirect('Setup_periode');
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
        

        
            return redirect('Setup_periode');    
        
    }

    //SETUP UNIT
    public function Unit(){
        $unit = DB::table('unit')->get();

        return view('Admin.Setup_unit', compact('unit'));
    }

    public function TambahUnit(){
        return view('Admin.Tambah-unit');
    }
    
    public function StoreUnit(Request $request){
        DB::table('unit')->insert([
            'nama_unit' => $request->nama_unit
        ]);

        return redirect('Setup_unit');
    }

    public function EditUnit(String $id_Unit)
    {
        $model = DB::table('unit')->where('id_Unit', $id_Unit)->get();

        return view('Admin.EditUnit', compact('model'));
    }

    public function UpdateUnit(Request $request, String $id_Unit)
    {
        DB::table('unit')->where('id_Unit', $id_Unit)->update([
            'nama_unit' => $request->nama_unit
        ]);

        return redirect('Setup_unit');
        
    }

    public function HapusUnit(string $id_Unit){
        $user = DB::table('unit')->where('id_Unit',$id_Unit)->delete();
        return redirect('Setup_unit');
    }

    //SETUP PERIODE UNIT
    public function PeriodeUnit(){
        //$periode_unit = DB::table('periode_unit')->get();
        //, 'unit', 'periode_unit.id_Unit', '=', 'unit.id_Unit'

        $periode_unit = Periode_unit::join('periode', 'periode_unit.id_Periode', '=', 'periode.id_Periode')->join('unit', 'periode_unit.id_Unit', '=', 'unit.id_Unit')->get([
            'periode_unit.id_Periode_unit', 'periode_unit.tanggal_audit', 'periode_unit.master_auditor', 'periode.no_sk', 'unit.nama_unit'
        ]);

        return view('Admin.Setup_periode-unit', compact('periode_unit'));
    }

    public function TambahPeriodeUnit(){
        // $periode_unit = Periode_unit::join('periode', 'periode_unit.id_Periode', '=', 'periode.id_Periode')->join('unit', 'periode_unit.id_Unit', '=', 'unit.id_Unit')->get([
        //     'periode_unit.id_Periode_unit', 'periode_unit.tanggal_audit', 'periode_unit.master_auditor', 'periode.no_sk', 'unit.nama_unit'
        // ]);

        $periode = DB::table('periode')->get();
        $unit = DB::table('unit')->get();

        return view('Admin.Tambah-periode-unit', compact('periode', 'unit'));
    }
    
    public function StorePeriodeUnit(Request $request){
        DB::table('periode_unit')->insert([
            'tanggal_audit' => $request->tanggal_audit,
            'master_auditor' => $request->master_auditor,
            'id_Unit' => $request->id_Unit,
            'id_Periode' => $request->id_Periode
        ]);

        return redirect('Setup_periode-unit');
    }

    public function EditPeriodeUnit(Request $request, String $id_Periode_unit)
    {
        $model = Periode_unit::join('periode', 'periode_unit.id_Periode', '=', 'periode.id_Periode')->join('unit', 'periode_unit.id_Unit', '=', 'unit.id_Unit')->get([
            'periode_unit.id_Periode_unit', 'periode_unit.tanggal_audit', 'periode_unit.master_auditor', 'periode.no_sk', 'unit.nama_unit'
        ])->where('id_Periode_unit', '=', $request->id_Periode_unit);
        $periode = DB::table('periode')->get();
        $unit = DB::table('unit')->get();
        $periode_unit = DB::table('periode_unit')->get();

        return view('Admin.EditPeriodeUnit', compact('model', 'periode', 'unit', 'periode_unit'));
    }

    public function UpdatePeriodeUnit(Request $request, String $id_Periode_unit)
    {
        DB::table('periode_unit')->where('id_Periode_unit',$id_Periode_unit)->update([
            'tanggal_audit' => $request->tanggal_audit,
            'master_auditor' => $request->master_auditor,
            'id_Unit' => $request->id_Unit,
            'id_Periode' => $request->id_Periode
        ]);

        return redirect('Setup_periode-unit');
        
    }

    public function HapusPeriodeUnit(string $id_Periode_unit){
        $user = DB::table('periode_unit')->where('id_Periode_unit',$id_Periode_unit)->delete();
        return redirect('Setup_periode-unit');
    }
}
