<?php

namespace App\Http\Controllers;

use App\keuangan;
use Illuminate\Http\Request;

class keuanganController extends Controller
{
    public function index(){
        $keuangan = Keuangan::all();
        return view('keuangan.keuangankelas',['keuangan' => $keuangan]);
    }
    
    public function tambah(Request $request){
        Keuangan::create([
            'bulan' => $request->bulan,
            'pemasukan' => $request->pemasukan,
            'pengeluaran' => $request->pengeluaran,
            'saldo' => $request->saldo
        ]);
        return redirect('/keuangan');
    }

    public function hapus($id)
    {
        $keuangan = Keuangan::find($id);
        $keuangan->delete();
        return redirect('/keuangan');
    }
}
