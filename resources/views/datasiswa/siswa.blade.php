@extends('bagian.sidebar')

@section('content')

    <a href="/siswa/cetak_pdf" class="btn btn-danger" target="_blank" style="margin-top:2%;">Export PDF</a>
    <a href="/siswa/export_excel" class="btn btn-success" target="_blank" style="margin-top:2%;">Export EXCEL</a>

    <div class="card-header text-center mt-4">
    <h4  style="color:black">Data Siswa</h4>
    <table class="table table-striped" style="text-align:center;margin-top:2%;">
        <thead>
            <tr>
                <th>NIPD</th>
                <td>Kelas</td>
                <td>Nama Siswa</td>
                <th>NISN</th>
                <th>Jurusan</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <td>Phone</td>
                <th>Email</th>
                <th>Status Siswa</th>
            </tr>
        </thead>
        <tbody>
            @foreach($siswas as $s)
            <tr>
                <td>{{ $s->nipd }}</td>
                <td>{{ $s->kelas }}</td>
                <td>{{ $s->nama }}</td>
                <td>{{ $s->nisn }}</td>
                <td>{{ $s->jurusan }}</td>
                <td>{{ $s->tempat_lahir }}</td>
                <td>{{ $s->tanggal_lahir }}</td>
                <td>{{ $s->phone }}</td>
                <td>{{ $s->email }}</td>
                <td>{{ $s->status }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection