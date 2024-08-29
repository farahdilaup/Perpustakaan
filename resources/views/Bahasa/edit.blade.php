<!DOCTYPE html>
<html>

<body>
 
	
	<h3>Edit Bahasa</h3>
 
	<a href="/Bahasa"> Back</a>
	
	<br/>
	<br/>
 
	
	<form action="/Bahasa/update/{{$Bahasa->Id_bahasa}}" method="post">
		{{csrf_field()}}
		Nama bahasa <input type="text" required="required" name="Nama_bahasa" value="{{ $Bahasa->Nama_bahasa }}"> <br/>
        <input type="submit" value="Next">
	</form>

</body>
</html>