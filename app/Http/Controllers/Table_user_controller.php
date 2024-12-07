<?php

namespace App\Http\Controllers;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class Table_user_controller extends Controller
{
    public function index()
    {
        $data = Pegawai::all();
        return view('index', compact('data'));
    }

    public function tambah()
    {
        return view('tambah_user');
    }

    public function store(Request $request){
        Pegawai::create([
            'name' => $request->name,
            'posisi' => $request->posisi,
            'gaji' => $request->gaji
        ]);
        return redirect()->route('table_user')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id){
        $data = Pegawai::find($id);
        return view('edit_user', compact('data'));
    }

    public function update(Request $request, $id){
        $pegawai = Pegawai::find($id);
        $pegawai->update([
            'name' => $request->name,
            'posisi' => $request->posisi,
            'gaji' => $request->gaji,
        ]);

        return redirect()->route('table_user')->with('success', 'Data berhasil diperbarui');
    }

    public function delete($id){
        $pegawai = Pegawai::find($id);
        $pegawai->delete();

        return redirect()->route('table_user')->with('success', 'Data berhasil dihapus');
    }
}
