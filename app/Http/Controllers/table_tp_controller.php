<?php

namespace App\Http\Controllers;
use App\Models\tp;
use Illuminate\Http\Request;

class table_tp_controller extends Controller
{
    public function index()
    {
        $data = tp::all();
        return view('showtp', compact('data'));
    }

    public function tambah()
    {
        return view('tambah_tp');
    }

    public function store(Request $request){
        tp::create([
            'name' => $request->name,
            'subJudul' => $request->subJudul,
            'kategori' => $request->kategori,
            'deadline'=> $request->deadline,
            'deskripsi'=> $request->deskripsi

        ]);
        return redirect()->route('table_tp')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id){
        $data = tp::find($id);
        return view('edit_tp', compact('data'));
    }

    public function update(Request $request, $id){
        $table_tp = tp::find($id);
        $table_tp->update([
            'name' => $request->name,
            'subJudul' => $request->subJudul,
            'kategori' => $request->kategori,
            'deadline'=> $request->deadline,
            'deskripsi'=> $request->deskripsi
        ]);
        return redirect()->route('table_tp')->with('success', 'Data berhasil diperbarui');
    }

    public function delete($id){
        $table_tp = tp::find($id);
        $table_tp->delete();

        return redirect()->route('table_tp')->with('success', 'Data berhasil dihapus');
    }
}
