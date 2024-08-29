@extends('layout/home')

@section('title','Daftar Pegawai')
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1 class="mt-3">Daftar Pegawai</h1>
                    <a href="/Pegawai/create"> + Tambah Pegawai</a>

                    <table class="table table-striped">
                    <tr>
                    <th scope="col">NIP</th>
                    <th scope="col">Nama_pegawai</th>
                    <th scope="col">Username</th>
                    <th scope="col">Password</th>
                    <th scope="col">Status_pegawai</th>
                    </tr>
                    @foreach($pegawai as $p)
                    <tr>
                    <td scope="col">{{$p->NIP}}</td>
                    <td scope="col">{{$p->Nama_pegawai}}</td>
                    <td scope="col">{{$p->Username}}</td>
                    <td scope="col">{{$p->Password}}</td>
                    <td scope="col">{{$p->Status_pegawai}}</td>
                    
                    <td>
                    <a href="/Pegawai/edit/{{$p->NIP}}">EDIT</a>
                    <a href="/Pegawai/hapus/{{$p->NIP}}">HAPUS</a>
                        </td>
                </tr>
                @endforeach
                  </table>
                </body>
                    </html>
                    @endsection