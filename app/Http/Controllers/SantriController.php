<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use App\Models\Santri;
use App\Models\WaliSantri;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class SantriController extends Controller
{
    public function index()
    {
        $santris = Santri::all();
        return view('Administrator.Santris.santri', compact('santris'));
    }
    // Menampilkan halaman tambah santri

    public function add(){
        $walisantris = WaliSantri::get();
        $penggunas = Pengguna::get();
        return view('Administrator/PesanTiketFutsals/addPesanTiketFutsal', compact('id_walisantri', 'id_santri'));
    }
    

    // Menyimpan data santri baru
    public function insertData(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_santri' => 'required|string',
            'id_pengguna' => 'required|exists:penggunas,id',
            'id_walisantri' => 'required|exists:wali_santris,id',
            'no_hp' => 'required|string',
            'email' => 'required|email',
            'kelas' => 'required|string',
        ]);

        // Menyimpan data santri baru ke dalam database
        Santri::create([
            'nama_santri' => $request->nama_santri,
            'id_pengguna' => $request->id_pengguna,
            'id_walisantri' => $request->id_walisantri,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
            'kelas' => $request->kelas,
        ]);

        // Redirect ke halaman sebelumnya dengan pesan sukses
        return redirect()->back()->with('success', 'Data santri berhasil ditambahkan.');
    }

    // Menampilkan halaman untuk mengedit data santri
    public function edit($id)
    {
        $santri = Santri::findOrFail($id);
        return view('Administrator.Santris.editsantri', compact('santri'));
    }

    // Mengupdate data santri
    public function updateData(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'nama_santri' => 'required|string',
            'id_pengguna' => 'required|exists:penggunas,id',
            'id_walisantri' => 'required|exists:wali_santris,id',
            'no_hp' => 'required|string',
            'email' => 'required|email',
            'kelas' => 'required|string',
        ]);

        // Temukan santri berdasarkan ID dan update data
        $santri = Santri::findOrFail($id);
        $santri->update([
            'nama_santri' => $request->nama_santri,
            'id_pengguna' => $request->id_pengguna,
            'id_walisantri' => $request->id_walisantri,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
            'kelas' => $request->kelas,
        ]);

        // Redirect ke halaman sebelumnya dengan pesan sukses
        return redirect()->back()->with('success', 'Data santri berhasil diperbarui.');
    }

    // Menghapus data santri
    public function delete($id)
    {
        $santri = Santri::findOrFail($id);
        $santri->delete();
        return redirect()->back()->with('success', 'Data santri berhasil dihapus.');
    }

    // Menghasilkan laporan dalam format PDF
    public function exportpdf(){
        $data = Santri::all();
        $PDF = PDF::loadView('Administrator/PesanTiketSepakBolas/a', array('data' => $data));
        return $PDF->stream('report-santri.pdf');
    }
}
