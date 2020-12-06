@extends('layouts.appmain')

@section('sidebar')
<div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Starbhak Manage</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{asset('dashboard/images/chef_1.jpg')}}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome</span>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Walikelas</h3>
                <ul class="nav side-menu">
                  <li><a href="/tampil"><i class="fa fa-home"></i> Home </a></li>

                  <li><a href="/siswa"><i class="fa fa-book"></i> Data Siswa </a></li>

                  <li><a href="/jadwal"><i class="fa fa-desktop"></i> Jadwal Mengajar </a></li>

                </ul>
              </div>
              <div class="menu_section">
                <h3>Management Kelas</h3>
                <ul class="nav side-menu">
                  <li><a href="/adm"><i class="fa fa-edit"></i> Data ADM </a></li>

                  <li><a href="/absen"><i class="fa fa-apple"></i> Absensi Kelas </a></li>

                  <li><a href="/keuangannn"><i class="fa fa-home"></i> Keuangan Kelas </a></li>

                  <li><a href="/kasus"><i class="fa fa-home"></i> Kasus Siswa </a></li>

                  <li><a href="/rapat"><i class="fa fa-home"></i> Rapat Orang Tua  </a></li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->
      <div class="modal" tabindex="-1" id="keuangan">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Management Walas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            
            <div class="modal-body">
                <div class="input-group mb-3">
                    <form action="/keuangannn"  method="post">
                    {{ csrf_field() }}
                        <input type="password"  name="kode" class="form-control" placeholder="Kode Kelas" aria-label="Kode Kelas" aria-describedby="basic-addon1"><br><br><hr>
                        <button type="submit" class="btn btn-info">Kirim</button>
                    </form>
                </div>
            </div>
            </div>
        </div>
        </div>

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Back" href="/home" style="width:6cm;">
                <span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>
              </a>
              {{-- <a data-toggle="tooltip" data-placement="top" title="Setting">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="....">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title=".....">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a> --}}
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                    <img src="" alt="">Wellcome
                </li>

                
              </ul>
            </nav>

             <!-- page content -->
          </div>
        </div>
    <div class="right_col" role="main" style="height:auto;">
          
          @yield('content')

    </div>
          <!-- @include('bagian.footer') -->
  </div>
  
  <script src="{{asset('build/js/custom.min.js')}}"></script>
@endsection
    