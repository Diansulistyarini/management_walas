<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\user;
use App\kela;
use App\Keuangan;
use App\Absensikela;
use App\Dataadm;
use App\Kasussiswa;
use App\Rapat;
use App\Datasiswa;
use App\Jadwalguru;
use App\Keuangankela;
use PDF;
use App\Exports\SiswaExport;
use App\Exports\JadwalExport;
use App\Exports\AbsensiExport;
use App\Exports\AdmExport;
use App\Exports\KasusExport;
use App\Exports\RapatExport;
use App\Exports\KasExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

use Session;

class DashController extends Controller
{
    public function showkelas(){
        $kelass = Kela::all();
        return view('dashboardWalas', ['kelass' => $kelass]);
    }

    public function main()
    {
        // $count = user::count();
        $count = Dataadm::count();
        $count = Jadwalguru::count();
        return view('dashboard');
    }

    public function countuser(){
       
        return view('dashboard',);
    }

    public function check(Request $request){
        $kode = $request->input('kode');

        $cek = DB::table('kelas')->where(['kode'=> $kode])->first();

        if($cek->kode == $kode){
            $request->session()->put('kode',$kode);
            return redirect('/tampil');
        }else {
            return redirect('/gagal');
        }
    }

    public function show(Request $request){
        if($request->session()->has('kode')){
            $keuangan = Keuangan::where('kode', $request->session()->get('kode'))->get();
            return view('keuangan.keuangankelas' , ['keuangan'=> $keuangan]);
		}else{
			echo 'Tidak ada data dalam session.';
        }
    }

    public function showabsen(Request $request){
        if($request->session()->has('kode')){
            $absen = Absensikela::where('kode', $request->session()->get('kode'))->get();
            return view('absen.absen', ['absen'=> $absen]);
		}else{
			echo 'Tidak ada data dalam session.';
        }
    }

    public function showadm(Request $request){
        if($request->session()->has('kode')){
            $adm = Dataadm::where('kode', $request->session()->get('kode'))->get();
            return view('adm.admwalas', ['adm_walass' => $adm]);
		}else{
			echo 'Tidak ada data dalam session.';
        }
    }

    public function showkasus(Request $request){
        if($request->session()->has('kode')){
            $kasus = Kasussiswa::where('kode', $request->session()->get('kode'))->get();
            return view('kasus.kasus', ['kasussiswa' => $kasus]);
		}else{
			echo 'Tidak ada data dalam session.';
        }
    }

    public function showrapat(Request $request){
        if($request->session()->has('kode')){
            $jadwal = Rapat::where('kode', $request->session()->get('kode'))->get();
            return view('rapat.index', ['jadwals' => $jadwal]);
		}else{
			echo 'Tidak ada data dalam session.';
        }
    }
    
    public function showsiswa(Request $request){
        if($request->session()->has('kode')){
            $siswas = Datasiswa::where('kode', $request->session()->get('kode'))->get();
            return view('datasiswa.siswa', ['siswas' => $siswas]);
		}else{
			echo 'Tidak ada data dalam session.';
        }
    }

    public function showjadwal(Request $request){
        if($request->session()->has('kode')){
            $jadwal = jadwalguru::where('kode', $request->session()->get('kode'))->get();
            return view('jadwal.jadwal', ['jadwal' => $jadwal]);
		}else{
			echo 'Tidak ada data dalam session.';
        }
    }
    public function cetak_pdf(Request $request)
    {
        if($request->session()->has('kode')){
           $absen = absensikela::where('kode', $request->session()->get('kode'))->get();
 
            $pdf = 'PDF'::loadview('laporan.absen-pdf',['absen'=>$absen]);
            return $pdf->download('Report-Absensi.pdf');
		}else{
			echo 'Tidak ada data dalam session.';
        }
    }

    public function dtjadwal_pdf(Request $request)
    {
        if($request->session()->has('kode')){
            $jadwal = Jadwalguru::where('kode', $request->session()->get('kode'))->get();
            
            $pdf = 'PDF'::loadview('laporan.jadwal-pdf',['jadwals'=>$jadwal]);
    	    return $pdf->stream();
         }else{
             echo 'Tidak ada data dalam session.';
         }
    }

    public function rapat_pdf(Request $request)
    {
        if($request->session()->has('kode')){
            $rapats = Rapat::where('kode', $request->session()->get('kode'))->get();
            
            $pdf = 'PDF'::loadview('laporan.rapatortu-pdf',['rapats'=>$rapats]);
    	    return $pdf->stream();
         }else{
             echo 'Tidak ada data dalam session.';
         }
    }

    public function kas_pdf(Request $request)
    {
        if($request->session()->has('kode')){
            $kas = Keuangankela::where('kode', $request->session()->get('kode'))->get();
            
            $pdf = 'PDF'::loadview('laporan.keuangan-pdf',['keuangan'=>$kas]);
    	    return $pdf->stream();
         }else{
             echo 'Tidak ada data dalam session.';
         }
    }

    public function dtsiswa_pdf(Request $request)
    {
        if($request->session()->has('kode')){
            $ds = Datasiswa::where('kode', $request->session()->get('kode'))->get();
            
            $pdf = 'PDF'::loadview('laporan.datasiswa-pdf',['datasiswas'=>$ds])->setPaper('A4', 'landscape');
    	    return $pdf->download('Report-Siswa.pdf');
         }else{
             echo 'Tidak ada data dalam session.';
         }
    }

    public function kasus_pdf(Request $request)
    {
        if($request->session()->has('kode')){
            $kasus = Kasussiswa::where('kode', $request->session()->get('kode'))->get();
            
            $pdf = 'PDF'::loadview('laporan.kasus-pdf',['kasussiswas'=>$kasus]);
    	    return $pdf->stream();
         }else{
             echo 'Tidak ada data dalam session.';
         }
    }

    public function adm_pdf(Request $request)
    {
        if($request->session()->has('kode')){
            $adm = Dataadm::where('kode', $request->session()->get('kode'))->get();
            
            $pdf = 'PDF'::loadview('laporan.adm-pdf',['dataadms'=>$adm]);
    	    return $pdf->stream();
         }else{
             echo 'Tidak ada data dalam session.';
         }
    }

    public function dtsiswa_excel()
	{
		return Excel::download(new SiswaExport, 'siswa.xlsx');
    }
    
    public function dtjadwal_excel()
	{
		return Excel::download(new JadwalExport, 'jadwal.xlsx');
    }
    
    public function absen_excel()
	{
		return Excel::download(new AbsensiExport, 'Absensi.xlsx');
    }
    
    public function kasus_excel()
	{
		return Excel::download(new KasusExport, 'Kasus.xlsx');
	}

    public function rapat_excel()
	{
		return Excel::download(new RapatExport, 'Rapat.xlsx');
	}

    public function adm_excel()
	{
		return Excel::download(new AdmExport, 'Adm.xlsx');
	}

    public function kas_excel()
	{
		return Excel::download(new KasExport, 'Kas.xlsx');
	}

}
