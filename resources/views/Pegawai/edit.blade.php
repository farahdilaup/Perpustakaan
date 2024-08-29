<!DOCTYPE html>
<html>

<body>
 
	
	<h3>Edit Pegawai</h3>
 
	<a href="/Pegawai"> Back</a>
	
	<br/>
	<br/>
 
	
	<form action="/Pegawai/update/{{$Pegawai->NIP}}" method="post">
		{{csrf_field()}}
		NIP <input type="text" required="required" name="NIP" value="{{ $Pegawai->NIP }}"> <br/> 
		Nama pegawai <input type="text" required="required" name="Nama_pegawai" value="{{ $Pegawai->Nama_pegawai }}"> <br/>
		Username <input type="text" required="required" name="Username" value="{{ $Pegawai->Username }}"> <br/>
		Password <input type="text" required="required" name="Password" value="{{ $Pegawai->Password }}" > <br/>
        Status pegawai <input type="text" required="required" name="Status_pegawai" value="{{ $Pegawai->Status_pegawai }}"> <br/>
        <input type="submit" value="Simpan Data">
	</form>

		
 
</body>
</html>