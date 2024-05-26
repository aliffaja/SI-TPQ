<?php

namespace App\Http\Controllers;
use App\Models\Pengguna;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function index(){
        $data = Pengguna::get();
        return view('Administrator/Penggunas/pengguna', compact('data'));
    }

    // Fungsi CRUD
    public function add(){
        return view('Administrator/Penggunas/addPengguna');
    }

    public function insertdata(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required|min:8',
            'level' => 'required|boolean',
        ]);

        $data = Pengguna::create([
            'username' => $request->username,
            'password' =>  bcrypt($request->password),
            'level' => $request->level,
        ]);

        return redirect()->route('register-pengguna')->with('primary', 'Data Berhasil Ditambahkan!.');

    }

    public function readdata($id){
        $data = Pengguna::find($id);
        return view('Administrator/Penggunas/updatePengguna' , compact('data'));
    }

    public function alldata($id){
        $data = Pengguna::find($id);
        return view('Administrator/Penggunas/allPengguna' , compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = Pengguna::find($id);
        $request->validate([
            'username' => 'required',
            'level' => 'required',
        ]);

        $data -> update([
            'username' => $request->username,
            'password' =>  bcrypt($request->password),
            'level' => $request->level,
        ]);

        return redirect()->route('Pengguna')->with('success', 'Data Berhasil Diubah!');
    }

    public function deletedata($id){
        $data = Pengguna::find($id);
        $data->delete();
        return redirect()->route('Pengguna')->with('danger', 'Data Berhasil Dihapus!');
    }

    // Logic to determine if user is a teacher or a student
    public function checkUserRole($level) {
        return $level == 0 ? "Guru" : "Santri";
    }
}
