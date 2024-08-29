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
      <h3 class="card-title">Tambah Anggota Perpustakaan</h3>
    </div>
	<div class="card-body">
         <a href="/Anggota" class="btn btn-primary">Kembali</a>
            <br/>
              <br/>

	<form method="post" action="/Anggota/store" method="get">
		{{ csrf_field() }}
		<div class="form-group">
        <label>Nama Anggota</label>
        <input type="text" name="Nama_anggota" class="form-control" placeholder="">
 		</div>
 		<br/>
 		<div class="form-group">
        <label>Tahun_masuk</label>
        <input type="text" name="Tahun_masuk" class="form-control" placeholder="">
 		</div>
		<br/>
		<div class="form-group">
		<label>Kelas</label>
        <input type="text" name="Kelas" class="form-control" placeholder="">
 		</div>
		<br/>
		<div class="form-group">
		<label>Username_anggota</label>
        <input type="text" name="Username_anggota" class="form-control" placeholder="">
 		</div>
		<br/>
		<div class="form-group">
		<label>Password_anggota</label>
        <input type="text" name="Password_anggota" class="form-control" placeholder="">
 		</div>
		<br/>
		<div class="form-group">
		<label>Status_anggota</label>
        <input type="text" name="Status_anggota" class="form-control" placeholder="">
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

