<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Periode;
use App\Models\User;
use App\Models\Auditor;

class AuditorController extends Controller
{
    //SETUP FILE DAN SETUP RUANG LINGKUP
    public function SetupFile2(){
        $idPeriodeUnit = session('id_periode_unit');

        $setupfile = DB::table('file_setup')->join('ruang_lingkup', 'file_setup.id_ruang_lingkup', '=', 'ruang_lingkup.id_Ruang_lingkup')->join('periode_unit', 'ruang_lingkup.id_Periode_unit', '=', 'periode_unit.id_Periode_unit')->join('jenis__ruang_lingkup', 'ruang_lingkup.id_Jenis_ruang_lingkup', '=', 'jenis__ruang_lingkup.id_Jenis_ruang_lingkup')->join('unit', 'periode_unit.id_Unit', '=', 'unit.id_Unit')->join('auditee', 'file_setup.id_Auditee', '=', 'auditee.id_Auditee')->join('user', 'auditee.id_User', '=', 'user.id')->where('periode_unit.id_Periode_unit', $idPeriodeUnit)->get();

        return view('Auditor.Setup_file2', compact('setupfile'));
    }

    public function TambahFile2(){
        $setupfile = DB::table('jenis__ruang_lingkup')->get();

        return view('Auditor.Tambah-file2', compact('setupfile'));
    }

    public function StoreFile2(Request $request)
    {
        $idPeriodeUnit = session('id_periode_unit');

        $user = DB::table('user')->where('nip', $request->nip)->first();

        // Cek auditee yang diinsert sebelumnya
        $existingAuditee = DB::table('auditee')->where('id_User', $user->id)->first();

        if ($existingAuditee) {
            $auditeeId = $existingAuditee->id_Auditee;
        } else {
            // Jika tidak ada auditee yang sudah diinsert sebelumnya, insert auditee baru dan dapatkan id-nya
            $auditeeId = DB::table('auditee')->insertGetId([
                'id_User' => $user->id
            ]);
        }

        $ruang_lingkup = DB::table('ruang_lingkup')->insertGetId([
            'id_Periode_unit' => $idPeriodeUnit,
            'id_Jenis_ruang_lingkup' => $request->id_Jenis_ruang_lingkup,
            'nama_ruang_lingkup' => $request->nama_ruang_lingkup,
            'file_ruang_lingkup' => ''
        ]);

        $file = $request->file('file_ruang_lingkup');
        $nama_dokumen = $idPeriodeUnit . '-' . $ruang_lingkup . $request->nama_ruang_lingkup . '.' . $request->file('file_ruang_lingkup')->getClientOriginalExtension();
        $file->move('FileRuangLingkup/', $nama_dokumen);

        DB::table('ruang_lingkup')->where('id_Ruang_lingkup', $ruang_lingkup)->update([
            'file_ruang_lingkup' => $nama_dokumen
        ]);

        DB::table('file_setup')->insert([
            'id_Auditee' => $auditeeId,
            'id_Ruang_lingkup' => $ruang_lingkup
        ]);

        return redirect('Setup_file2');
    }

    public function EditFile2(String $id_Ruang_lingkup){
        $idPeriodeUnit = session('id_periode_unit');

        $jenis_ruang_lingkup = DB::table('jenis__ruang_lingkup')->get();

        $setupfile = DB::table('file_setup')->join('ruang_lingkup', 'file_setup.id_ruang_lingkup', '=', 'ruang_lingkup.id_Ruang_lingkup')->join('periode_unit', 'ruang_lingkup.id_Periode_unit', '=', 'periode_unit.id_Periode_unit')->join('jenis__ruang_lingkup', 'ruang_lingkup.id_Jenis_ruang_lingkup', '=', 'jenis__ruang_lingkup.id_Jenis_ruang_lingkup')->join('unit', 'periode_unit.id_Unit', '=', 'unit.id_Unit')->join('auditee', 'file_setup.id_Auditee', '=', 'auditee.id_Auditee')->join('user', 'auditee.id_User', '=', 'user.id')->where('ruang_lingkup.id_Ruang_lingkup', $id_Ruang_lingkup)->get();

        return view('Auditor.EditFile2', compact('setupfile', 'jenis_ruang_lingkup'));
    }

    public function UpdateFile2(Request $request, String $id_Ruang_lingkup)
    {
        $idPeriodeUnit = session('id_periode_unit');

        if ($request->hasFile('file_ruang_lingkup')) {
            $file = $request->file('file_ruang_lingkup');
            $nama_dokumen = $idPeriodeUnit . '-' . $id_Ruang_lingkup . $request->nama_ruang_lingkup . '.' . $request->file('file_ruang_lingkup')->getClientOriginalExtension();
            $file->move('FileRuangLingkup/', $nama_dokumen);

            // Update the file_sk field with the new file name
            DB::table('ruang_lingkup')->where('id_Ruang_lingkup', $id_Ruang_lingkup)->update([
                'file_ruang_lingkup' => $nama_dokumen,
            ]);
        }

        // Update ruang_lingkup table
        DB::table('ruang_lingkup')->where('id_Ruang_lingkup', $id_Ruang_lingkup)->update([
            'id_Periode_unit' => $idPeriodeUnit,
            'id_Jenis_ruang_lingkup' => $request->id_Jenis_ruang_lingkup,
            'nama_ruang_lingkup' => $request->nama_ruang_lingkup
        ]);

        $user = DB::table('user')->where('nip', $request->nip)->first();

        // Get the existing auditee ID from file_setup table
        $existingAuditeeId = DB::table('file_setup')->where('id_Ruang_lingkup', $id_Ruang_lingkup)->value('id_Auditee');

        // Check if the user already has an existing auditee record
        $existingAuditee = DB::table('auditee')->where('id_User', $user->id)->first();

        if ($existingAuditee) {
            // Use the existing auditee ID
            $auditeeId = $existingAuditee->id_Auditee;
        } else {
            // Update auditee table with the user ID and get the auditee ID
            $auditeeId = DB::table('auditee')->insertGetId([
                'id_User' => $user->id
            ]);
        }

        // Update file_setup table with the auditee ID
        DB::table('file_setup')->where('id_Ruang_lingkup', $id_Ruang_lingkup)->update([
            'id_Auditee' => $auditeeId
        ]);

        // Cek apakah auditee masih terkait dengan setup file lainnya
        $setupFileCount = DB::table('file_setup')->where('id_Auditee', $existingAuditeeId)->count();

        if ($setupFileCount == 0) {
            // Hapus auditee yang tidak terkait dengan setup file lainnya
            DB::table('auditee')->where('id_Auditee', $existingAuditeeId)->delete();
        }

        return redirect('Setup_file2');
    }



    public function HapusFile2(Request $request, $id_Ruang_lingkup)
    {
        $idPeriodeUnit = session('id_periode_unit');

        $file_setup = DB::table('ruang_lingkup')->where('id_Ruang_lingkup', $id_Ruang_lingkup)->first();
        File::delete('FileRuangLingkup/'.$file_setup->file_ruang_lingkup);

        // Mengambil id auditee yang terkait dengan file_setup
        $auditeeIds = DB::table('file_setup')->where('id_Ruang_lingkup', $id_Ruang_lingkup)->pluck('id_Auditee');

        // Cek apakah ada setup file lain yang menggunakan id auditee yang sama
        $setupFileLain = DB::table('file_setup')->whereIn('id_Auditee', $auditeeIds)->where('id_Ruang_lingkup', '<>', $id_Ruang_lingkup)->first();

        if (!$setupFileLain) {
            // Tidak ada setup file lain yang menggunakan id auditee yang sama
            // Hapus auditee
            DB::table('auditee')->whereIn('id_Auditee', $auditeeIds)->delete();
        }

        // Menghapus data dari tabel file_setup
        DB::table('file_setup')->where('id_Ruang_lingkup', $id_Ruang_lingkup)->delete();

        // Menghapus data dari tabel ruang_lingkup
        DB::table('ruang_lingkup')->where('id_Ruang_lingkup', $id_Ruang_lingkup)->delete();

        return redirect('Setup_file2');
    }

    //DATA AUDIT
    public function DataAudit2(){
        $idPeriodeUnit = session('id_periode_unit');

        $setupfile = DB::table('file_setup')->join('ruang_lingkup', 'file_setup.id_ruang_lingkup', '=', 'ruang_lingkup.id_Ruang_lingkup')->join('periode_unit', 'ruang_lingkup.id_Periode_unit', '=', 'periode_unit.id_Periode_unit')->join('jenis__ruang_lingkup', 'ruang_lingkup.id_Jenis_ruang_lingkup', '=', 'jenis__ruang_lingkup.id_Jenis_ruang_lingkup')->join('unit', 'periode_unit.id_Unit', '=', 'unit.id_Unit')->join('auditee', 'file_setup.id_Auditee', '=', 'auditee.id_Auditee')->join('user', 'auditee.id_User', '=', 'user.id')->where('periode_unit.id_Periode_unit', $idPeriodeUnit)->where('file_setup.status', 'Open')->get();

        return view('Auditor.Data_audit2', compact('setupfile'));
    }

    public function TambahFileKTA2($id_File_setup){
        $setupfile = DB::table('file_setup')->where('id_File_setup', $id_File_setup)->get();

        return view('Auditor.Tambah-file_kta2', compact('setupfile'));
    }

    public function StoreFileKTA2(Request $request, $id_File_setup){
        $idPeriodeUnit = session('id_periode_unit');

        $user = DB::table('auditor')->join('user', 'auditor.id_User', '=', 'user.id')->where('id_Periode_unit', $idPeriodeUnit)->first();

        $setupfile = DB::table('file_setup')->join('ruang_lingkup', 'file_setup.id_ruang_lingkup', '=', 'ruang_lingkup.id_Ruang_lingkup')->join('periode_unit', 'ruang_lingkup.id_Periode_unit', '=', 'periode_unit.id_Periode_unit')->join('jenis__ruang_lingkup', 'ruang_lingkup.id_Jenis_ruang_lingkup', '=', 'jenis__ruang_lingkup.id_Jenis_ruang_lingkup')->join('unit', 'periode_unit.id_Unit', '=', 'unit.id_Unit')->join('auditee', 'file_setup.id_Auditee', '=', 'auditee.id_Auditee')->join('user', 'auditee.id_User', '=', 'user.id')->where('id_File_setup', $id_File_setup)->first();

        $file = $request->file('file_audit');
        $nama_dokumen = 'KTA' . $user->nip . '-'. $user->id_Auditor . $setupfile->nama_jenis_ruang_lingkup . '_' . $user->nama . $request->nama_ruang_lingkup . '.' . $request->file('file_audit')->getClientOriginalExtension();
        $file->move('FileKTA/', $nama_dokumen);

        DB::table('file_setup')->where('id_File_setup', $id_File_setup)->update([
            'file_kta' => $nama_dokumen
        ]);

        return redirect('Data_audit2');
    }

    public function ClosingAudit2()
    {
        $idPeriodeUnit = session('id_periode_unit');

        $setupfiles = DB::table('file_setup')->join('ruang_lingkup', 'file_setup.id_ruang_lingkup', '=', 'ruang_lingkup.id_Ruang_lingkup')->join('periode_unit', 'ruang_lingkup.id_Periode_unit', '=', 'periode_unit.id_Periode_unit')->join('jenis__ruang_lingkup', 'ruang_lingkup.id_Jenis_ruang_lingkup', '=', 'jenis__ruang_lingkup.id_Jenis_ruang_lingkup')->join('unit', 'periode_unit.id_Unit', '=', 'unit.id_Unit')->join('auditee', 'file_setup.id_Auditee', '=', 'auditee.id_Auditee')->join('user', 'auditee.id_User', '=', 'user.id')->where('periode_unit.id_Periode_unit', $idPeriodeUnit)->get();

        foreach ($setupfiles as $setupfile) {
            $id_File_setup = $setupfile->id_File_setup;
            
            DB::table('file_setup')->where('id_File_setup', $id_File_setup)->update([
                'status' => 'Closed'
            ]);
        }

        DB::table('periode_unit')->where('id_Periode_unit', $idPeriodeUnit)->update([
            'status' => 'Closed'
        ]);

        // Mengupdate status file menjadi "Closed"
        // $setupFile = File_setup::find('id_File_setup', $id_File_setup);
        // $setupFile->status = 'closed';
        // $setupFile->save();

        return redirect()->back()->with('success', 'Proses "Closing" berhasil dilakukan. File tidak dapat diunggah lagi.');
        // echo "id nya ", $id_File_setup;
    }
}
