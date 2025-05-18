<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawai = DB::table('pegawai')->get();
        return view('show', ['pegawai'=> $pegawai]);
    }

    public function create()
    {
        return view ('create');
    }

    public function store(Request $request)
    {
   DB::table('pegawai')->insert([
        'pegawai_nama' => $request->nama,
        'pegawai_jabatan' => $request->jabatan,
        'pegawai_umur' => $request->umur,
        'pegawai_alamat' => $request->alamat,
    ]);
    return redirect('/pegawai')->with('success', 'Data pegawai berhasil disimpan.');
}

    public function edit($id)
    {
      $pegawai = DB::table('pegawai')->where('pegawai_id', $id)->first();
        return view('edit', ['pegawai'=> $pegawai]);
    }

    // update data pegawai
public function update(Request $request, $id)
{
    // update data pegawai
    DB::table('pegawai')->where('pegawai_id', $id)->update([
        'pegawai_nama' => $request->nama,
        'pegawai_jabatan' => $request->jabatan,
        'pegawai_umur' => $request->umur,
        'pegawai_alamat' => $request->alamat
    ]);

    return redirect()->route('pegawai.index')->with('success', 'Data berhasil diperbarui.');
}

public function destroy($id)
{
    
    DB::table('pegawai')->where('pegawai_id', $id)->delete();
    return redirect('/pegawai')->with('success', 'Data pegawai berhasil dihapus.');
    
}


}
