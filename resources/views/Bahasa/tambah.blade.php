<!DOCTYPE html>
<html>
<head>
	<title>Daftar Bahasa Buku</title>
</head>
<body>
 
	<h2>Data Bahasa Buku</h2>
	<h3>Tambah Bahasa</h3>
	<br/>
	<a href="/Bahasa">back</a>
	<br/>
	<br/>
	<form action="/Bahasa/store" method="get">
		{{ csrf_field() }}
        Nama bahasa <input type="text" name="Nama_bahasa" required="required"> <br/>	
		<input type="submit" value="Next">
	</form>
</body>
</html>