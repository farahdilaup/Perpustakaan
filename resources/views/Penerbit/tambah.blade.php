<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
	<title>Daftar Penerbit Buku</title>
</head>
<body>
	 <div class="container">
            <div class="card mt-4">
                <div class="card text-white bg-info mb-12 text-center" style="max-width: 100rem;">
      <h3 class="card-title">Tambah Penerbit Buku</h3>
    </div>
	<div class="card-body">
         <a href="/Penerbit" class="btn btn-primary">Kembali</a>
            <br/>
              <br/>

	<form action="/Penerbit/store" method="get">
		{{ csrf_field() }}
		<div class="form-group">
        <label>Nama_penerbit</label>
        <input type="text" name="Nama_penerbit" class="form-control" placeholder="">
 		</div>
 		<br/>
 		<div class="form-group">
        <label>Alamat_penerbit</label>
        <input type="text" name="Alamat_penerbit" class="form-control" placeholder="">
 		</div>
 		<br/>
 		<div class="form-group">
        <label>No_tlp_penerbit</label>
        <input type="text" name="No_tlp_penerbit" class="form-control" placeholder="">
 		</div>
 		<br/>
 		<div class="form-group">
        <label>Email_penerbit</label>
        <input type="text" name="Email_penerbit" class="form-control" placeholder="">
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
