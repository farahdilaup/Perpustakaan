@extends('layout/home')
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1 class="mt-3">DAFTAR ANGGOTA PERPUSTAKAAN</h1>
                <br/>
                    <a href="/Anggota/create" class="btn btn-primary">+ Tambah Anggota</a>
                    <br/>
                    <br/>
                    <tr>
                    <table class ="table table-bordered table-striped">
                    <thead  class="thead-primary">
                    <th scope="col">NIS NIP</th>
                    <th scope="col">Nama Anggota</th>
                    <th scope="col">Tahun Masuk</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Status Anggota</th>
                    </thead>
                    </tr>
                    @foreach($anggota as $ag)
                    <tr>
                    <td scope="col">{{$ag->NIS_NIP}}</td>
                    <td scope="col">{{$ag->Nama_anggota}}</td>
                    <td scope="col">{{$ag->Tahun_masuk}}</td>
                    <td scope="col">{{$ag->Kelas}}</td>
                    <td scope="col">{{$ag->Status_anggota}}</td>
                    <td>
                    <a href="/Anggota/edit/{{$ag->NIS_NIP}}" class="btn btn-success">EDIT</a>
                    <a href="/Anggota/hapus/{{$ag->NIP_NIP}}" class="btn btn-danger">HAPUS</a>
                        </td>
                </tr>
                @endforeach
                  </table>
                </body>
                    </html>
                    @endsection