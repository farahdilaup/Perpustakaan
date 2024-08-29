<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
	<title>Daftar Anggota Perpustakaan</title>
</head>
<body>
	 <div class="container">
            <div class="card mt-4">
                <div class="card text-white bg-info mb-12 text-center" style="max-width: 100rem;">
      <h3 class="card-title">Tambah Jenis Perpustakaan</h3>
    </div>
	<div class="card-body">
         <a href="/Jenis_buku" class="btn btn-primary">Kembali</a>
            <br/>
              <br/>

	<form action="/Jenis_buku/store" method="post">
		{{ csrf_field() }}
		<div class="form-group">
        <label>Nama jenis buku</label>
        <input type="text" name="Nama_jenisbuku" class="form-control" placeholder="">
 		</div>
 		<br/>
 		<div class="form-group">
        <label>Kode jenis buku</label>
        <input type="text" name="Kode_jenisbuku" class="form-control" placeholder="">
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

