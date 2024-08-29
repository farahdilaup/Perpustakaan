@extends('layout/home')

@section('title','Daftar Buku')
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1 class="mt-3">Daftar Buku</h1>
                <br/>
                    <a href="/Buku/create" class="btn btn-primary"> + Tambah Buku</a>
                    <br/>
                    <br/>
                    <tr>
                   <table class="table table-striped">
                    <th scope="col">No ISBN</th>
                    <th scope="col">Id penerbit</th>
                    <th scope="col">Id jenis</th>
                    <th scope="col">Id bahasa</th>
                    <th scope="col">Judul buku</th>
                    <th scope="col">Tahun terbit</th>
                    <th scope="col">Penulis</th>
                    <th scope="col">Cetakan-ke</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Jumlah eksemplar</th>
                    <th scope="col">Kategori buku</th>
                    </tr>
                    @foreach($buku as $bu)
                    <tr>
                    <td scope="col">{{$bu->No_ISBN}}</td>
                    <td scope="col">{{$bu->Id_penerbit}}</td>
                    <td scope="col">{{$bu->Id_jenis}}</td>
                    <td scope="col">{{$bu->Id_bahasa}}</td>
                    <td scope="col">{{$bu->Judul_buku}}</td>
                    <td scope="col">{{$bu->Tahun_terbit}}</td>
                    <td scope="col">{{$bu->Penulis}}</td>
                    <td scope="col">{{$bu->Cetakan}}</td>
                    <td scope="col">{{$bu->Harga}}</td>
                    <td scope="col">{{$bu->Jumlah_eksemplar}}</td>
                    <td scope="col">{{$bu->Kategori_buku}}</td>
                    
                   <td>
                    <a href="/Buku/edit/{{$bu->No_ISBN}}" class="btn btn-success">EDIT</a>
                    <a href="/Buku/hapus/{{$bu->No_ISBN}}" class="btn btn-danger">HAPUS</a>
                        </td>
                </tr>
                @endforeach
                  </table>
                </body>
                    </html>
                    @endsection