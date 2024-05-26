<?php

namespace App\Http\Controllers;

use App\Models\WaliSantri;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class WaliSantriController extends Controller
{
    public function add()
    {
        $data = WaliSantri::get();
        return view('Administrator.WaliSantris.walisantri', compact('data'));
    }

    public function insertData(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'no_hp' => 'required|string|max:15',
        ]);

        WaliSantri::create($request->all());

        return redirect()->route('wali_santri.index')->with('success', 'Wali Santri berhasil ditambahkan.');
    }

    public function updateData(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'no_hp' => 'required|string|max:15',
        ]);

        $waliSantri = WaliSantri::findOrFail($id);
        $waliSantri->update($request->all());

        return redirect()->route('wali_santri.index')->with('success', 'Wali Santri berhasil diperbarui.');
    }

    public function delete($id)
    {
        WaliSantri::destroy($id);
        return redirect()->route('wali_santri.index')->with('success', 'Wali Santri berhasil dihapus.');
    }

    public function exportpdf(){
        $data = WaliSantri::all();
        $PDF = PDF::loadView('Administrator.WaliSantris.reportwalisantri', array('data' => $data));;
        return $PDF->stream('walisantri.pdf');
    }
}
