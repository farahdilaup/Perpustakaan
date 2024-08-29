<!DOCTYPE html>
<html>

<body>
 
	
	<h3>Edit Eksemplar</h3>
 
	<a href="/Eksemplar_buku"> Back</a>
	
	<br/>
	<br/>
 
	
	<form action="/Eksemplar_buku/update/{{$Eksemplar_buku->Kode_buku}}" method="post">
		{{csrf_field()}}
		Status_eksemplar_buku <input type="text" required="required" name="Status_eksemplar_buku" value="{{ $Eksemplar_buku->Status_eksemplar_buku }}"> <br/> 
		Kondisi_eksemplar_buku <input type="text" required="required" name="Kondisi_eksemplar_buku" value="{{ $Eksemplar_buku->Kondisi_eksemplar_buku }}"> <br/>
        <input type="submit" value="Simpan Data">
	</form>

		
 
</body>
</html>