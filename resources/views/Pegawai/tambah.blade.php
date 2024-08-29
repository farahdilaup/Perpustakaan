<!DOCTYPE html>
<html>
<head>
	<title>Data Pegawai Perpustakaan</title>
</head>
<body>
 
	<h2>Data Pegawai</h2>
	<h3>Tambah Pegawai</h3>
	<br/>
	<a href="/Pegawai">back</a>
	<br/>
	<br/>
	<form action="/Pegawai/store" method="get">
		{{ csrf_field() }}
		NIP <input type="text" name="NIP" required="required"> <br/>
        Nama pegawai <input type="text" name="Nama_pegawai" required="required"> <br/>
		Username <input type="text" name="Username" required="required"> <br/>
		Password <input type="text" name="Password" required="required"> <br/>
        Status pegawai <input type="text" name="Status_pegawai" required="required"> <br/>
		
		<input type="submit" value="Simpan Data">
	</form>
</body>
</html>