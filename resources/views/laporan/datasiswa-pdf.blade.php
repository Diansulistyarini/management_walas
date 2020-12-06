<!DOCTYPE html>
<html>
<head>
	<title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
    </style>

    <center>
		<h5>Laporan Data Siswa</h5>
	</center>
 
	<table class='table table-bordered'>
		<thead>
            <tr>
                <th scope="col">NIPD</th>
                <th scope="col">Kelas</th>
                <th scope="col">NISN</th>
                <th scope="col">Nama Siswa</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Tempat Lahir</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Phone</th>
                <th scope="col">Email</th>
                <th scope="col">Status Siswa</th>
            </tr>
        </thead>
        <tbody>
            @php $i=1 @endphp
            @foreach($datasiswas as $ds)
            <tr>
                <td>{{ $ds->nipd }}</td>
                <td>{{ $ds->kelas }}</td>
                <td>{{ $ds->nama }}</td>
                <td>{{ $ds->nisn }}</td>
                <td>{{ $ds->jurusan }}</td>
                <td>{{ $ds->tempat_lahir }}</td>
                <td>{{ $ds->tanggal_lahir }}</td>
                <td>{{ $ds->phone }}</td>
                <td>{{ $ds->email }}</td>
                <td>{{ $ds->status }}</td>
            </tr>
            @endforeach
        </tbody>
	</table>
 
</body>
</html>