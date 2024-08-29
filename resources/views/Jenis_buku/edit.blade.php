<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
	<title>Daftar jenis Buku Perpustakaan</title>
</head>
<body>
 <div class="container">
            <div class="card mt-4">
                <div class="card text-white bg-success mb-12 text-center" style="max-width: 100rem;">
      <h3 class="card-title">Edit jenis Buku Perpustakaan</h3>
    </div>
	<div class="card-body">
         <a href="/Jenis_buku" class="btn btn-primary">Kembali</a>
            <br/>
              <br/>
 
	
	<form  action="/Jenis_buku/update/{{$Jenis_buku->Id_jenis}}" method="post">
		{{csrf_field()}}
		 <div class="form-group">
        <label>jenis buku</label>
        <input type="text" required="required" name="Nama_jenisbuku" class="form-control" value="{{ $Jenis_buku->Nama_jenisbuku }} ">
        </div>
        <br/>
         <div class="form-group">
        <label>Kode jenis</label>
        <input type="text" required="required" name="Kode_jenisbuku" class="form-control" value="{{ $Jenis_buku->Kode_jenisbuku }} ">
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