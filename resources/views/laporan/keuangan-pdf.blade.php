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
		<h5>Laporan Keuangan Kelas</h5>
	</center>
 
	<table class='table table-bordered'>
		<thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Bulan</th>
                <th scope="col">Pemasukan Kelas</th>
                <th scope="col">Pengeluaran Kelas</th>
                <th scope="col">Saldo</th>
            </tr>
        </thead>
        <tbody>
            @php $i=1 @endphp
            @foreach($keuangan as $kas)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $kas->bulan}}</td>
                <td>{{ $kas->pemasukan}}</td>
                <td>{{ $kas->pengeluaran}}</td>
                <td>{{ $kas->saldo }}</td>
            </tr>
            @endforeach
        </tbody>
	</table>
 
</body>
</html>