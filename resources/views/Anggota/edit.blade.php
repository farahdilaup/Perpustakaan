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
                <div class="card text-white bg-success mb-12 text-center" style="max-width: 100rem;">
      <h3 class="card-title">Edit Anggota Perpustakaan</h3>
    </div>
	<div class="card-body">
         <a href="/Anggota" class="btn btn-primary">Kembali</a>
            <br/>
              <br/>
 
	
	<form method="post" action="/Anggota/update/{{$Anggota->NIS_NIP}}" method="get">
		{{csrf_field()}}
		<div class="form-group">
        <label>Nama Anggota</label>
        <input type="text" required="required" name="Nama_anggota" class="form-control" value="{{ $Anggota->Nama_Anggota }} ">
 		</div>
 		<br/>
		<div class="form-group">
        <label>Tahun_masuk</label>
        <input type="text" required="required" name="Tahun_masuk" class="form-control" value="{{ $Anggota->Tahun_masuk }}">
 		</div>
 		<br/>
 		<div class="form-group">
        <label>Kelas</label>
        <input type="text" required="required" name="Kelas" class="form-control" value="{{ $Anggota->Kelas }} ">
 		</div>
 		<br/>
 		<div class="form-group">
        <label>Username_anggota</label>
        <input type="text" name="Username_anggota" class="form-control" value="{{ $Anggota->Username_anggota }} ">
 		</div>
 		<br/>
 		<div class="form-group">
        <label>Password_anggota</label>
        <input type="text" name="Password_anggota" class="form-control" value="{{ $Anggota->Password_anggota }}" >
 		</div>
 		<br/>
 		<div class="form-group">
        <label>Status_anggota</label>
        <input type="text" name="Status_anggota" class="form-control" value="{{ $Anggota->Status_anggota }}" >
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

