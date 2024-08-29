@extends('layout/home')
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1 class="mt-3">Daftar jenis</h1>
                    <a href="/Jenis_buku/create" class="btn btn-primary" > + Tambah jenis</a>
                    <br/>
                    <br/>

                    <table class="table table-striped">
                    <tr>
                    <th scope="col">ID jenis</th>
                    <th scope="col">Nama jenisbuku</th>
                    <th scope="col">Kode jenisbuku</th>
                    </tr>
                    @foreach($jenis_buku as $j)
                    <tr>
                    <td scope="col">{{$j->Id_jenis}}</td>
                    <td scope="col">{{$j->Nama_jenisbuku}}</td>
                    <td scope="col">{{$j->Kode_jenisbuku}}</td>
                    <td>
                    <a href="/Jenis_buku/edit/{{$j->Id_jenis}}" class="btn btn-success">EDIT</a>
                    <a href="/Jenis_buku/hapus/{{$j->Id_jenis}}" class="btn btn-danger">HAPUS</a>
                    </td>
                        
                </tr>
                @endforeach
                  </table>
                </body>
                    </html>
                    @endsection