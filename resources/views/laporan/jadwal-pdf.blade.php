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
		<h5>Laporan Jadwal Pelajaran</h5>
	</center>
 
	<table class='table table-bordered'>
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
            @php $i=1 @endphp
            @foreach($jadwals as $j)
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
 
</body>
</html>