<!DOCTYPE html>
<html>
<head>
	<title>Eksemplar Buku</title>
</head>
<body>
 
	<h2>Data Eksemplar</h2>
	<h3>Tambah Eksemplar</h3>
	<br/>
	<a href="/Eksemplar_buku">back</a>
	<br/>
	<br/>
	<form action="/Eksemplar_buku/store" method="get">
		{{ csrf_field() }}
		Status_eksemplar_buku <input type="text" name="Status_eksemplar_buku" required="required"> <br/>
        Kondisi_eksemplar_buku <input type="text" name="Kondisi_eksemplar_buku" required="required"> <br/>
		
		<input type="submit" value="Simpan Data">
	</form>
</body>
</html>