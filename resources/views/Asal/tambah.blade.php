<!DOCTYPE html>
<html>
<head>
	<title>Daftar Asal Buku</title>
</head>
<body>
 
	<h2>Data Asal Buku</h2>
	<h3>Tambah Asal</h3>
	<br/>
	<a href="/Asal">back</a>
	<br/>
	<br/>
	<form action="/Asal/store" method="get">
		{{ csrf_field() }}
        Nama asal <input type="text" name="asal" required="required"> <br/>
        
		<input type="submit" value="Next">
	</form>
</body>
</html>