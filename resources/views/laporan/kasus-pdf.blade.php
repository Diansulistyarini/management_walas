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
		<h5>Laporan Kasus Siswa</h5>
	</center>
 
	<table class='table table-bordered'>
		<thead>
            <tr>
                <th>No</th>
                <th>Nama Siswa </th>
                <th>Jenis Kasus</th>
                <th>Point Kasus</th>
                <th>Tanggal Kasus</th>
            </tr>
        </thead>
        <tbody>
            @php $i=1 @endphp
            @foreach($kasussiswas as $k)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $k->namaSiswa }}</td>
                <td>{{ $k->jenisKasus }}</td>
                <td>{{ $k->point }}</td>
                <td>{{ $k->Tanggal }}</td>
            </tr>
            @endforeach
        </tbody>
	</table>
 
</body>
</html>