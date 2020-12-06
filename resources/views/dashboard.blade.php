@extends('bagian.sidebar')

@section('content')

  <div class="tile_count">
    <div class="col-md-2 col-sm-4  tile_stats_count">
      <span class="count_top"><i class="fa fa-user"></i> Data Absensi</span>
      <div class="count"><a href="/absen"></a>Absensi</div>
    </div>
    <div class="col-md-2 col-sm-4  tile_stats_count">
      <span class="count_top"><i class="fa fa-user"></i> Data ADM</span>
      <div class="count"><a href="/adm"></a>ADM</div>
    </div>
    <div class="col-md-2 col-sm-4  tile_stats_count">
      <span class="count_top"><i class="fa fa-user"></i> Data Kasus</span>
      <div class="count"><a href="/kasus">Kasus</a></div>
    </div>
    <div class="col-md-2 col-sm-4  tile_stats_count">
      <span class="count_top"><i class="fa fa-user"></i> Data Rapat</span>
      <div class="count"><a href="/rapat">Rapat</a></div>
    </div>
    <div class="col-md-2 col-sm-4  tile_stats_count">
      <span class="count_top"><i class="fa fa-user"></i> Data Siswa</span>
      <div class="count"><a href="/siswa">Siswa</a></div>
    </div>
    <div class="col-md-2 col-sm-4  tile_stats_count">
      <span class="count_top"><i class="fa fa-clock-o"></i> Jadwal</span>
      <div class="count"><a href="/jadwal">Jadwal</a></div>
    </div>
  </div>

  <div class="row">
      <div class="col-md-12 col-sm-12 ">
          <div class="dashboard_graph">

              <div class="row x_title">
                <div class="col-md-6">
                   <h3>Management Walikelas <small>S'Manage</small></h3>
                </div>
                <div class="col-md-6">
                  <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                  <span>Oktober 20, 2020 - November 25, 2020</span> <b class="caret"></b>
                  </div>
                </div>
              </div>

              <div class="col-md-9 col-sm-9 ">
                <div class="container">
                  <img src="{{asset('dashboard/tech.jpg')}}" alt="" style="width:750px;">
                </div>
              </div>
              
              <p style="margin-top: 1cm;">
                  S'Manage adalah aplikasi Management Walas. Aplikasi ini dibuat dengan Laravel. Fungsi Aplikasi Management Walas ini merupakan sebuah Aplikasi sederhana yang berbasis Web untuk menyusun laporan Administrasi Kelas, Administrasi Siswa dan Administrasi Pembelajaran , jadi pada dasarnya aplikasi ini sangat lengkap sehingga sangat cocok untuk Wali Kelas. Di aplikasi ini Wali Kelas dapat meng-input data. Jadi Wali Kelas bisa meng-input data siswanya serta data-data kegiatan yang telah dilaksanakan perkelas.
              </p>
            </div>
        </div>
@endsection