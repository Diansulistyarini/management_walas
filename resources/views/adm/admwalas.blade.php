@extends('bagian.sidebar')

@section('content')
    <button type="button" data-toggle="modal" data-target="#addData" style="color:white;margin-top:2%" class="btn btn-primary"><i class="fa fa-plus"></i> ADM </button> 
    <a href="/adm/cetak_pdf" class="btn btn-danger" target="_blank" style="margin-top: 2%">Export PDF</a>
    <a href="/adm/export_excel" class="btn btn-success" target="_blank" style="margin-top:2%;">Export EXCEL</a>
    
    <div class="card-header text-center mt-4">
    <h4  style="color:black">Data ADM</h4>
    <table class="table table-striped" style="text-align:center; margin-top:2%;">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Materi Pokok</th>
                            <th>Target Pengerjaan</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($adm_walass as $a)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $a->materiPokok }}</td>
                            <td>{{ $a->targetPengerjaan }}</td>
                            <td>
                                <button class="btn btn-primary" data-toggle="modal" data-target="#modalUpdate{{ $a->id }}">Edit</button>
                                <a href="/adm/hapus/{{ $a->id }}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    
    <!-- Update Data ADM -->
    @foreach ($adm_walass as $a)
    <div class="modal fade" id="modalUpdate{{ $a->id }}" tabindex="-1" aria-labelledby="modalUpdate" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Management Walas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form method="post" action="/adm/update/{{ $a->id }}">

                    {{ csrf_field() }}
                    {{ method_field('PUT') }}

                    <div class="form-group">
                        <label>Materi Pokok</label>
                        <input type="text" name="materiPokok" class="form-control" placeholder="Materi Pokok" value=" {{ $a->materiPokok }}">

                        @if($errors->has('materiPokok'))
                            <div class="text-danger">
                                {{ $errors->first('materiPokok')}}
                            </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Target Pengerjaan</label>
                        <input type="date" name="target" id="target">

                        @if($errors->has('target'))
                            <div class="text-danger">
                                {{ $errors->first('target')}}
                            </div>
                        @endif

                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Simpan">
                    </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach

    <!-- Tambah -->
    <div class="modal" tabindex="-1" id="addData">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data ADM Kelas </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form method="post" action="/adm/tambah">

            {{ csrf_field() }}

            <div class="form-group">
                <label>Materi Pokok</label>
                <input type="text" name="materiPokok" class="form-control" placeholder="Materi Pokok">

                @if($errors->has('materi_pokok'))
                    <div class="text-danger">
                        {{ $errors->first('materi_pokok')}}
                    </div>
                @endif

            </div>

            <div class="form-group">
                <label>Target Pengerjaan</label>
                <input type="date" name="target" id="target">

                @if($errors->has('target_pengerjaan'))
                    <div class="text-danger">
                        {{ $errors->first('target_pengerjaan')}}
                    </div>
                @endif
            </div>
            <div class="input-group mb-3">
                    <select class="custom-select" id="kode" name="kode">
                        <option selected>Choose...</option>
                        <option value="1234">XII RPL 1</option>
                        <option value="4321">XII RPL 2</option>
                        <option value="123">XI RPL 1</option>
                    </select>
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-success" value="Simpan">
            </div>

            </form>
        </div>
    </div>
@endsection