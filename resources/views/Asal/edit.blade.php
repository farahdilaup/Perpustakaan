<!DOCTYPE html>
<html>

<body>
 
	
	<h3>Edit Asal</h3>
 
	<a href="/Asal"> Back</a>
	
	<br/>
	<br/>
 
	
	<form action="/Asal/update/{{$Asal->Id_asal}}" method="post">
		{{csrf_field()}}
		Nama asal <input type="text" required="required" name="asal" value="{{ $Asal->asal }}"> <br/>
        <input type="submit" value="Simpan Data">
	</form>

		
 
</body>
</html>