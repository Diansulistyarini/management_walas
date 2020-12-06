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
		<h5>Laporan Rapat Oang Tua</h5>
	</center>
 
	<table class='table table-bordered'>
		<thead>
            <tr>
                <th>No</th>
                <th>Materi Pertemuan</th>
                <th>Tanggal Pertemuan</th>
                <th>Jumlah Hadir</th>
                <th>Bukti</th>
            </tr>
        </thead>
        <tbody>
            @php $i=1 @endphp
            @foreach($rapats as $r)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $r->materi_pertemuan}}</td>
                <td>{{ $r->date}}</td>
                <td>{{ $r->jml_hadir}}</td>
                <td>{{ $r->bukti}}</td>
            </tr>
            @endforeach
        </tbody>
	</table>
 
</body>
</html>