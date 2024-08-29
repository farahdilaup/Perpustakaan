<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
	<title>Daftar Buku Perpustakaan</title>
</head>
<body>
 <div class="container">
            <div class="card mt-4">
                <div class="card text-white bg-success mb-12 text-center" style="max-width: 100rem;">
      <h3 class="card-title">Edit Buku Perpustakaan</h3>
    </div>
	<div class="card-body">
         <a href="/Buku" class="btn btn-primary">Kembali</a>
            <br/>
              <br/>
 
	<form method="post" action ="/Buku/update/{{$Buku->N0_ISBN}}" method="post">
		{{csrf_field()}}
        <div class="form-group">
        <label>No ISBN</label>
        <input type="hidden" required="required" name="N0_ISBN" class="form-control" value="{{ $Buku->N0_ISBN }} ">
        </div>
        <br/>
		<div class="form-group">
        <label>Id penerbit</label>
        <input type="text" required="required" name="Id_penerbit" class="form-control" value="{{ $Buku->Id_penerbit }} ">
 		</div>
 		<br/>
		<div class="form-group">
        <label>Id jenis</label>
        <input type="text" required="required" name="Id_jenis" class="form-control" value="{{ $Buku->Id_jenis }} ">
 		</div>
 		<br/>
 		<div class="form-group">
        <label>Id bahasa</label>
        <input type="text" required="required" name="Id_bahasa" class="form-control" value="{{ $Buku->Id_bahasa }} ">
 		</div>
 		<br/>
 		<div class="form-group">
        <label>Judul buku</label>
        <input type="text" required="required" name="Judul_buku" class="form-control" value="{{ $Buku->Judul_buku }} ">
 		</div>
 		<br/>
 		<div class="form-group">
        <label>Tahun terbit</label>
        <input type="date" required="required" name="Tahun_terbit" class="form-control" value="{{ $Buku->Tahun_terbit }} ">
 		</div>
 		<br/>
 		<div class="form-group">
        <label>Penulis</label>
        <input type="text" required="required" name="Penulis" class="form-control" value="{{ $Buku->Penulis }} ">
 		</div>
 		<br/>
 		<div class="form-group">
        <label>Cetakan-ke</label>
        <input type="text" required="required" name="Cetakan" class="form-control" value="{{ $Buku->Cetakan }} ">
 		</div>
 		<br/>
 		<div class="form-group">
        <label>Harga</label>
        <input type="text" required="required" name="Harga" class="form-control" value="{{ $Buku->Harga }} ">
 		</div>
 		<br/>
 		<div class="form-group">
        <label>Jumlah eksemplar</label>
        <input type="text" required="required" name="Jumlah_eksemplar" class="form-control" value="{{ $Buku->Jumlah_eksemplar }} ">
 		</div>
 		<br/>
 		<div class="form-group">
        <label>Kategori buku</label>
        <input type="text" required="required" name="Kategori_buku" class="form-control" value="{{ $Buku->Kategori_buku }} ">
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