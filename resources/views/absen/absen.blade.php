@extends('bagian.sidebar')

@section('content')

    <a data-toggle="modal" data-target="#addData" class="btn btn-primary" style="color:white; margin-top:2%"><i class="fa fa-plus"></i> Data Absensi</a>
    <a href="/absen/cetak_pdf" class="btn btn-danger" target="_blank" style="margin-top: 2%">Export PDF</a>
    <a href="/absen/export_excel" class="btn btn-success" target="_blank" style="margin-top:2%;">Export EXCEL</a>

    <div class="card-header text-center mt-4">
    <h4  style="color:black">Data Absensi Kelas</h4>
    <table class="table table-striped" style="text-align:center; margin-top:2%;">
            <thead>
                <tr>
                    <th style="text-align: center">No</th>
                    <th style="text-align: center">Tanggal</th>
                    <th style="text-align: center">Jumlah Siswa Hadir</th>
                    <th style="text-align: center">Jumlah Ketidakhadiran</th>
                    {{-- <th style="text-align: center">Siswa Yang tidak hadir</th> --}}
                    <th style="text-align: center">Bukti KBM</th>
                    <th style="text-align: center">Aksi</th>
                </tr>
            </thead>
                    <tbody>
                        @foreach($absen as $a)
                        <tr style="text-align: center">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $a->tanggal }}</td>
                            <td>{{ $a->jumlahSiswaHadir }}</td>
                            <td>{{ $a->jumlahKetidakhadiran }}</td>
                            {{-- <td>{{ $a->namaSiswaTidakHadir }}</td> --}}
                            <td>
                                <img src="{{ asset ('bukti/'. $a->bukti) }}" alt=" {{ $a->bukti }}" width="100px">
                            </td>
                            <td>
                                <button class="btn btn-primary" data-toggle="modal" data-target="#updateData{{ $a->id }}">Edit</button>
                                <a href="/absen/hapus/{{ $a->id }}" class="btn btn-danger">Delete</button>
                            </td>
                        </tr>
                        <tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

                 <!-- Modal Tambah -->
                <div class="modal" tabindex="-1" id="addData">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Input Absensi</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <form action="/absen/tambah" method="post" enctype="multipart/form-data" role="form">
                        {{ csrf_field() }}
                            <div class="form-group">
                                <label>Tanggal</label>
                                <input type="date" id="tanggal" name="tanggal" class="form-control"  aria-label="tanggal" aria-describedby="basic-addon1">
                            </div>
                            <div class="form-group">
                                <label>Jumlah Siswa Hadir</label>
                                <input type="number" id="jumlahSiswaHadir" name="jumlahSiswaHadir" class="form-control"  aria-label="jumlahhadir" placeholder="Jumlah Siswa Hadir" aria-describedby="basic-addon1">
                            </div>
                            <div class="form-group">
                                <label>Jumlah Ketidakhadiran</label>
                                <input type="number" id="jumlahKetidakhadiran" name="jumlahKetidakhadiran" class="form-control"  aria-label="ketidakhadiran" placeholder="Jumlah Ketidakhadiran" aria-describedby="basic-addon1">
                            </div>
                            {{-- <div class="form-group">
                                <label>Nama Siswa Yang Tidak Hadir</label>
                                <input type="text" id="namaSiswaTidakHadir" name="namaSiswaTidakHadir" class="form-control"  aria-label="siswatidakhadir" placeholder="Siswa yang Tidak hadir" aria-describedby="basic-addon1">
                            </div> --}}
                            <div class="form-group">
                                <input type="file" id="bukti" name="bukti">
                            </div>
                            <div class="input-group mb-3">
                                <select class="custom-select" id="kode" name="kode">
                                    <option selected>Choose...</option>
                                    <option value="1234">XII RPL 1</option>
                                    <option value="4321">XII RPL 2</option>
                                    <option value="123">XI RPL 1</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <br>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                            </form>
                        </div>
                        </div>
                    </div>
                </div>

                <!-- Modal Edit -->
                @foreach ($absen as $a)
                <div class="modal" tabindex="-1" id="updateData{{$a->id}}">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Absensi</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="/absen/update/{{$a->id}}">
                                @csrf
                                @method('put')
                                <input type="hidden" class="form-control" id="id" name="id" value="{{$a->id}}">
                                <div class="form-group">
                                    <label>Jumlah Hadir</label>
                                    <input type="number" id="jumlahSiswaHadir" name="jumlahSiswaHadir" class="form-control"  aria-label="jumlahSiswaHadir" value="{{$a->jumlahSiswaHadir}}" aria-describedby="basic-addon1">
                                </div>
                                <div class="form-group">
                                    <label>Jumlah Ketidakhadiran</label>
                                    <input type="number" id="jumlahKetidakhadiran" name="jumlahKetidakhadiran" class="form-control"  aria-label="jumlahKetidakhadiran" value="{{$a->jumlahKetidakhadiran}}" aria-describedby="basic-addon1">
                                </div>
                                {{-- <div class="form-group">
                                    <label>Nama Siswa Yang Tidak Hadir</label>
                                    <input type="text" id="namaSiswaTidakHadir" name="namaSiswaTidakHadir" class="form-control"  aria-label="namaSiswaTidakHadir" value="{{$a->namaSiswaTidakHadir}}" aria-describedby="basic-addon1">
                                </div> --}}
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach

                <!-- Modal Delete -->
                {{-- @foreach($absen as $a)
                <div class="modal" tabindex="-1" id="deleteData">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Hapus Absensi</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Yakin anda ingin menghapus data ini?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <a href="/absen/hapus/{{ $a-> id }}"><button type="button" class="btn btn-danger">Hapus</button></a>
                        </div>
                        </div>
                    </div>
                </div>
                @endforeach --}}
        @endsection
