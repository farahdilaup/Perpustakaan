<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
	<title>Daftar Buku</title>
</head>
<body>
<div class="container">
            <div class="card mt-4">
                <div class="card text-white bg-primary mb-12 text-center" style="max-width: 100rem;">
      <h3 class="card-title">Tambah Buku Perpustakaan</h3>
    </div>
	<div class="card-body">
         <a href="/Buku" class="btn btn-primary">Kembali</a>
            <br/>
              <br/>
	<form action="/Buku/store" method="get">
		{{csrf_field()}}
		<div class="form-group">
        <label>ID penerbit</label>
        <input type="text" name="Id_penerbit" required="required" class="form-control" placeholder="">
 		</div>
 		<br/>
 		<div class="form-group">
        <label>ID jenis</label>
        <input type="text" name="Id_jenis" required="required" class="form-control" placeholder="">
 		</div>
 		<br/>
 		<div class="form-group">
        <label>ID bahasa</label>
        <input type="text" name="Id_bahasa" required="required" class="form-control" placeholder="">
 		</div>
 		<br/>
 		<div class="form-group">
        <label>Judul buku</label>
        <input type="text" name="Judul_buku" required="required" class="form-control" placeholder="">
 		</div>
 		<br/>
 		<div class="form-group">
        <label>Tahun terbit</label>
        <input type="date" name="Tahun_terbit" required="required" class="form-control" placeholder="">
 		</div>
 		<br/>
 		<div class="form-group">
        <label>Penulis</label>
        <input type="text" name="Penulis" required="required" class="form-control" placeholder="">
 		</div>
 		<br/>
 		<div class="form-group">
        <label>Cetakan-ke</label>
        <input type="text" name="Cetakan" required="required" class="form-control" placeholder="">
 		</div>
 		<br/>
 		<div class="form-group">
        <label>Harga</label>
        <input type="text" name="Harga" required="required" class="form-control" placeholder="">
 		</div>
 		<br/>
 		<div class="form-group">
        <label>Jumlah_eksemplar</label>
        <input type="text" name="Jumlah_eksemplar" required="required" class="form-control" placeholder="">
 		</div>
 		<br/>
 		<div class="form-group">
        <label>Kategori_buku</label>
        <input type="text" name="Kategori_buku"  required="required" class="form-control" placeholder="">
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