<?php

namespace App\Http\Controllers;
use App\Rapat;
use Illuminate\Http\Request;
use App\Rapatortu;

class RapatController extends Controller
{

	public function showJadwal()
    {
        $jadwal = Rapat::all();
        return view('rapat.index', ['jadwals' => $jadwal]);
    }

    //add jadwal
    function add_jadwal(Request $request)
    {
        $request->validate([
            'materi_pertemuan' => 'required',
            'date' => 'required',
            'jml_hadir' => 'required',
            'bukti' => 'required',
        ]);

        $file = $request->file('bukti');

        // // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'bukti';

        // // upload file
        $file->move($tujuan_upload, $file->getClientOriginalName());

        Rapat::create([
            'materi_pertemuan' => $request->materi_pertemuan,
            'date' => $request->date,
            'jml_hadir' => $request->jml_hadir,
            'bukti' => $file->getClientOriginalName(),
            'kode' => $request->kode
        ]);
        return redirect('/rapat')->with('status', 'Data ' . $request->materi_pertemuan . ' Berhasil Ditambahkan!');
    }


    public function upd_jadwal($id_jadwal, Request $request)
    {
        $this->validate($request, [
            'materi_pertemuan' => 'required',
            'date' => 'required',
            'jml_hadir' => 'required',
        ]);

        $jadwals = Rapat::find($id_jadwal);
        $jadwals->materi_pertemuan = $request->materi_pertemuan;
        $jadwals->date = $request->date;
        $jadwals->jml_hadir = $request->jml_hadir;
        $jadwals->save();

        return redirect('/rapat');
    }


    public function del_jadwal($id_jadwal)
    {
        $jadwal = Rapat::find($id_jadwal);
        $jadwal->delete();
        return redirect('/rapat');
    }
	
    public function index()
    {
    	$rapat = Rapatortu::all();
		return view('rapat.rapat', ['rapat' => $rapat]);
    }

    public function store(Request $request)
    {
    	$request->validate([
            'materi_pertemuan' => 'required',
            'tgl_pertemuan' => 'required',
            'jumlah_hadir' => 'required',
            'bukti' => 'required',
        ]);

        $file = $request->file('bukti');

        // // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'bukti';

        // // upload file
        $file->move($tujuan_upload, $file->getClientOriginalName());

        Rapatortu::create([
            'materiPertemuan' => $request->materi_pertemuan,
            'Tanggal' => $request->tgl_pertemuan,
            'jumlahHadir' => $request->jumlah_hadir,
            'bukti' => $file->getClientOriginalName()
        ]);
        return redirect('/rapat')->with('status', 'Data ' . $request->materi_pertemuan . ' Berhasil Ditambahkan!');
        
    }

     public function update($id, Request $request)
    {
    		$this->validate($request,[
	    		'materi_pertemuan' => 'required',
				'tgl_pertemuan' => 'required',
				'jumlah_hadir' => 'required',
				'bukti' => 'required'
	    	]);

    		$rapat = Rapatortu::find($id);
    		$rapat->materiPertemuan = $request->materi_pertemuan;
			$rapat->tglPertemuan = $request->tgl_pertemuan;
			$rapat->jumlahHadir = $request->jumlah_hadir;
			$rapat->bukti = $request->bukti;
    		$rapat->save();
    		return redirect('/rapat');
    }

     public function delete($id)
    {
    		$rapat = Rapatortu::find($id);
    		$rapat->delete();
    		return redirect('/rapat');
    }    
}
