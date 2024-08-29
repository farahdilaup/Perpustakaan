<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
	<title>Daftar penerbit Buku </title>
</head>
<body>
 <div class="container">
            <div class="card mt-4">
                <div class="card text-white bg-success mb-12 text-center" style="max-width: 100rem;">
      <h3 class="card-title">Edit penerbit Buku </h3>
    </div>
	<div class="card-body">
         <a href="/Penerbit" class="btn btn-primary">Kembali</a>
            <br/>
              <br/>
 
	
	<form action="/Penerbit/update/{{$Penerbit->Id_penerbit}}" method="post">
		{{csrf_field()}}
		<div class="form-group">
        <label>Nama penerbit</label>
        <input type="text" required="required" name="Nama_penerbit" class="form-control" value="{{ $Penerbit->Nama_penerbit }} ">
        </div>
        <br/>
        <div class="form-group">
        <label>Alamat penerbit</label>
        <input type="text" required="required" name="Alamat_penerbit" class="form-control" value="{{ $Penerbit->Alamat_penerbit }} ">
        </div>
        <br/>
        <div class="form-group">
        <label>No Telephone</label>
        <input type="text" required="required" name="No_tlp_penerbit" class="form-control" value="{{ $Penerbit->No_tlp_penerbit }} ">
        </div>
        <br/>
        <div class="form-group">
        <label>Email penerbit</label>
        <input type="text" required="required" name="Email_penerbit" class="form-control" value="{{ $Penerbit->Email_penerbit }} ">
        </div>
        <br/>
	  <div class="form-group">
        <input type="submit" class="btn btn-success" value="Simpan">
        </div>
	</form>
	</div>
   </div>
</div>
</body>
</html>