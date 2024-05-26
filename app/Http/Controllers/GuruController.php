<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;

class GuruController extends Controller
{
    public function index(){
        $data = Guru::get();
        return view('Administrator.Gurus.addguru', compact('data'));
    }

    public function add(){
        return view('Administrator.Gurus.addguru', compact('data'));
    }

    public function insertdata(Request $request){
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'email' => 'required', 
        ]);

        $data = Guru::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'email' => $request->email,
        ]);
        return redirect()->route('Guru')->with('primary', 'Data Berhasil Ditambahkan!!!');
    }

    public function show()
    {
        // return view('registeradmin');
    }
}