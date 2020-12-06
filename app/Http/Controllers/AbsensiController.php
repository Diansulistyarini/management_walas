<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Absensikela;

class AbsensiController extends Controller
{
    public function index()
    {
        $absen = Absensikela::all();
        return view('absen.absen', ['absen' => $absen]);
    }

    public function tambah(Request $request)
    {
        $validateData = $request->validate([
            'tanggal' => 'required',
            'jumlahSiswaHadir' => 'required',
            'jumlahKetidakhadiran' => 'required',
            'bukti' => 'required',
            'kode' => 'required'
        ]);
        dump($validateData);

        $bukti = $request->file('bukti');
        $name_file = $bukti->getClientOriginalName();
        $bukti->move(base_path('/public/bukti'), $name_file);

        $absen = new Absensikela();
        $absen->tanggal = $validateData['tanggal'];
        $absen->jumlahSiswaHadir = $validateData['jumlahSiswaHadir'];
        $absen->jumlahKetidakhadiran = $validateData['jumlahKetidakhadiran'];
        $absen->bukti = $name_file;
        $absen->kode = $validateData['kode'];
        $absen->save();
        return redirect('/absen');
    }

    public function hapus($id)
    {
        $absen = Absensikela::find($id);
        $absen->delete();
        return redirect('/absen');
    }

    public function update(Request $request, $id)
    {
        $absen = Absensikela::find($id);
        $absen->jumlahSiswaHadir = $request->jumlahSiswaHadir;
        $absen->jumlahKetidakhadiran = $request->jumlahKetidakhadiran;
        $absen->save();
        return redirect('/absen');
    }

    }
