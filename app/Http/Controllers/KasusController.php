<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kasussiswa;

class KasusController extends Controller
{
    public function index(){
        $kasus = Kasussiswa::all();
        return view('kasus.kasus', ['kasussiswas' => $kasus]);
    }    

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_siswa' => 'required',
            'jenis_kasus' => 'required',
            'point_kasus' => 'required',
        ]);

        Kasussiswa::create([
            'namaSiswa' => $request->nama_siswa,
            'jenisKasus' => $request->jenis_kasus,
            'point' => $request->point_kasus,
            'Tanggal' => $request->tanggal,
            'kode' => $request->kode,
        ]);

        return redirect('/kasus');
    }

    public function delete($id)
    {
        $kasus = Kasussiswa::find($id);
        $kasus->delete();
        return redirect('/kasus');
    }

    public function update($id, Request $request)
    {
        $this->validate($request, [
            'namasiswa' => 'required',
            'jeniskasus' => 'required',
            'pointkasus' => 'required'
        ]);

        $kasus = Kasussiswa::find($id);
        $kasus->namaSiswa = $request->namasiswa;
        $kasus->jenisKasus = $request->jeniskasus;
        $kasus->point = $request->pointkasus;
        $kasus->Tanggal = $request->tanggal;
        $kasus->save();
        return redirect('/kasus');
    }

}
