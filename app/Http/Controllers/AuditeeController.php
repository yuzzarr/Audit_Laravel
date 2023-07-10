<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Periode;
use App\Models\User;
use App\Models\Auditor;
use App\Models\Auditee;
use App\Models\File_setup;
use File;

class AuditeeController extends Controller
{
    public function ProsesAudit(){
        $idAuditee = session('id_Auditee');
        // $idPeriodeUnit = session('id_periode_unit');

        $setupfile = DB::table('file_setup')->join('ruang_lingkup', 'file_setup.id_ruang_lingkup', '=', 'ruang_lingkup.id_Ruang_lingkup')->join('periode_unit', 'ruang_lingkup.id_Periode_unit', '=', 'periode_unit.id_Periode_unit')->join('jenis__ruang_lingkup', 'ruang_lingkup.id_Jenis_ruang_lingkup', '=', 'jenis__ruang_lingkup.id_Jenis_ruang_lingkup')->join('unit', 'periode_unit.id_Unit', '=', 'unit.id_Unit')->join('auditee', 'file_setup.id_Auditee', '=', 'auditee.id_Auditee')->join('user', 'auditee.id_User', '=', 'user.id')->where('auditee.id_Auditee', $idAuditee)->where('file_setup.status', 'Open')->get();

        return view('Auditee.Proses_audit', compact('setupfile'));
        // echo "Session nya ", $idFileSetup;
        // echo "Session nya ", $idAuditee;
        // echo "Session nya ", $idPeriodeUnit;
    }

    public function TambahFileAudit($id_File_setup){
        $setupfile = DB::table('file_setup')->where('id_File_setup', $id_File_setup)->get();

        return view('Auditee.Tambah-file-audit', compact('setupfile'));
    }

    public function StoreFileAudit(Request $request, $id_File_setup){
        $idAuditee = session('id_Auditee');

        $user = DB::table('auditee')->join('user', 'auditee.id_User', '=', 'user.id')->where('id_Auditee', $idAuditee)->first();

        $setupfile = DB::table('file_setup')->join('ruang_lingkup', 'file_setup.id_ruang_lingkup', '=', 'ruang_lingkup.id_Ruang_lingkup')->join('periode_unit', 'ruang_lingkup.id_Periode_unit', '=', 'periode_unit.id_Periode_unit')->join('jenis__ruang_lingkup', 'ruang_lingkup.id_Jenis_ruang_lingkup', '=', 'jenis__ruang_lingkup.id_Jenis_ruang_lingkup')->join('unit', 'periode_unit.id_Unit', '=', 'unit.id_Unit')->join('auditee', 'file_setup.id_Auditee', '=', 'auditee.id_Auditee')->join('user', 'auditee.id_User', '=', 'user.id')->where('id_File_setup', $id_File_setup)->first();

        $file = $request->file('file_audit');
        $nama_dokumen = 'Audit' . $user->nip . '-'. $user->id_Auditee . $setupfile->nama_jenis_ruang_lingkup . '_' . $user->nama . $request->nama_ruang_lingkup . '.' . $request->file('file_audit')->getClientOriginalExtension();
        $file->move('FileAudit/', $nama_dokumen);

        DB::table('file_setup')->where('id_File_setup', $id_File_setup)->update([
            'file_audit' => $nama_dokumen
        ]);

        return redirect('Proses_audit');
    }

    public function TambahFileFeedback($id_File_setup){
        $setupfile = DB::table('file_setup')->where('id_File_setup', $id_File_setup)->get();

        return view('Auditee.Tambah-file-feedback', compact('setupfile'));
    }

    public function StoreFileFeedback(Request $request, $id_File_setup){
        $idAuditee = session('id_Auditee');

        $user = DB::table('auditee')->join('user', 'auditee.id_User', '=', 'user.id')->where('id_Auditee', $idAuditee)->first();

        $setupfile = DB::table('file_setup')->join('ruang_lingkup', 'file_setup.id_ruang_lingkup', '=', 'ruang_lingkup.id_Ruang_lingkup')->join('periode_unit', 'ruang_lingkup.id_Periode_unit', '=', 'periode_unit.id_Periode_unit')->join('jenis__ruang_lingkup', 'ruang_lingkup.id_Jenis_ruang_lingkup', '=', 'jenis__ruang_lingkup.id_Jenis_ruang_lingkup')->join('unit', 'periode_unit.id_Unit', '=', 'unit.id_Unit')->join('auditee', 'file_setup.id_Auditee', '=', 'auditee.id_Auditee')->join('user', 'auditee.id_User', '=', 'user.id')->where('id_File_setup', $id_File_setup)->first();

        $file = $request->file('file_feedback');
        $nama_dokumen = 'Feedback' . $user->nip . '-'. $user->id_Auditee . $setupfile->nama_jenis_ruang_lingkup . '_' . $user->nama . $request->nama_ruang_lingkup . '.' . $request->file('file_feedback')->getClientOriginalExtension();
        $file->move('FileFeedback/', $nama_dokumen);

        DB::table('file_setup')->where('id_File_setup', $id_File_setup)->update([
            'file_feedback' => $nama_dokumen
        ]);

        return redirect('Proses_audit');
    }
}
