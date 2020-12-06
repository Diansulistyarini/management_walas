@extends('bagian.sidebar')

@section('content')
<a href="/jadwal/cetak_pdf" class="btn btn-danger" target="_blank" style="margin-top:2%;">Export PDF</a>
<a href="/jadwal/export_excel" class="btn btn-success" target="_blank" style="margin-top:2%;">Export EXCEL</a>

    
<div class="card-header text-center mt-4">
  <h4  style="color:black">Data Jadwal</h4>
    <table class="table table-striped" style="text-align:center; margin-top:3px;">
        <thead>
            <tr>
                <th>No</th>
                <th>Hari</th>
                <th>Tanggal</th>
                <th>Nama Guru</th>
                <th>Mata Pelajaran</th>
                <th>Jam</th>
            </tr>
        </thead>
        <tbody>
            @foreach($jadwal as $j)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $j->hari }}</td>
                <td>{{ $j->tanggal }}</td>
                <td>{{ $j->nama_guru }}</td>
                <td>{{ $j->mata_pelajaran }}</td>
                <td>{{ $j->jam }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection