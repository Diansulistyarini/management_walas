@extends('bagian.sidebar')

@section('content')
    <a data-toggle="modal" data-target="#addData" class="btn btn-primary" style="color:white;margin-top:2%"><i class="fa fa-plus"></i>Kasus Siswa</a>
    <a href="/kasus/cetak_pdf" class="btn btn-danger" target="_blank" style="margin-top:2%">Export PDF</a>
    <a href="/kasus/export_excel" class="btn btn-success" target="_blank" style="margin-top:2%;">Export EXCEL</a>
      
    <div class="card-header text-center mt-4">
    <h4  style="color:black">Data Kasus Siswa</h4>
    <table class="table table-striped" style="text-align:center; margin-top:2%;">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Siswa </th>
                <th>Jenis Kasus</th>
                <th>Point Kasus</th>
                <th>Tanggal Kasus</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
        @foreach($kasussiswa as $k)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $k->namaSiswa }}</td>
                <td>{{ $k->jenisKasus }}</td>
                <td>{{ $k->point }}</td>
                <td>{{ $k->Tanggal }}</td>
                <td>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#updateData{{ $k->id }}">Edit</button>
                    <a href="/kasus/hapus/{{ $k->id }}" class="btn btn-danger">Delete</button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>

    <!-- Modal Tambah-->
    <div class="modal" tabindex="-1" id="addData">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="/kasus/tambah">

                {{ csrf_field() }}

                <div class="form-group">
                    <label>Nama Siswa</label>
                    <input type="text" name="nama_siswa" class="form-control" placeholder="Nama Siswa">

                    @if($errors->has('nama_siswa'))
                        <div class="text-danger">
                            {{ $errors->first('nama_siswa')}}
                        </div>
                    @endif

                </div>

                <div class="form-group">
                    <label>Jenis Kasus</label>
                    <input type="text" name="jenis_kasus" class="form-control" placeholder="Jenis Kasus">

                    @if($errors->has('jenis_kasus'))
                        <div class="text-danger">
                            {{ $errors->first('jenis_kasus')}}
                        </div>
                    @endif

                </div>

                <div class="form-group">
                    <label>Point Kasus</label>
                    <input type="text" name="point_kasus" class="form-control" placeholder="Point Kasus">

                    @if($errors->has('point_kasus'))
                        <div class="text-danger">
                            {{ $errors->first('point_kasus')}}
                        </div>
                    @endif

                </div>

                <div class="form-group">
                    <label>Tanggal Kasus</label>
                    <input type="date" name="tanggal" class="form-control" placeholder="Tanggal Kasus" id="date">
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
                <button type="submit" class="btn btn-primary">Save changes</button>
            </form>
            </div>
            </div>
        </div>
        </div>

        <!-- Modal Edit-->
        @foreach ($kasussiswa as $k)
        <div class="modal" tabindex="-1" id="updateData{{$k->id}}">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Kasus</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="/kasus/update/{{$k->id}}" >
                            @csrf
                            @method('put')
                            <div class="form-group">
                            <label>Nama Siswa</label>
                            <input type="text" name="namasiswa" class="form-control" placeholder="Nama Siswa" value=" {{ $k->namaSiswa }}">

                            @if($errors->has('nama_siswa'))
                                <div class="text-danger">
                                    {{ $errors->first('nama_siswa')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Jenis Kasus</label>
                            <input type="text" name="jeniskasus" class="form-control" placeholder="Jenis Kasus" value=" {{ $k->jenisKasus }}">

                            @if($errors->has('jenis_kasus'))
                                <div class="text-danger">
                                    {{ $errors->first('jenis_kasus')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Point Kasus</label>
                            <input type="text" name="pointkasus" class="form-control" placeholder="Point Kasus" value=" {{ $k->point }}">

                            @if($errors->has('point_kasus'))
                                <div class="text-danger">
                                    {{ $errors->first('point_kasus')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Tanggal Kasus</label>
                            <input type="date" name="tanggal" class="form-control" placeholder="Tanggal Kasus" id="tanggal" value=" {{ $k->Tanggal }}">
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Perbarui Data</button>
                    </form>
                </div>
                </div>
            </div>
        </div>
        @endforeach
    @endsection