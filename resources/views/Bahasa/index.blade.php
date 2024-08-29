@extends('layout/home')

@section('title','Daftar Bahasa Buku')
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1 class="mt-3">Daftar Bahasa Buku</h1>
                    <a href="/Bahasa/create"> + Tambah Bahasa</a>

                    <table class="table table-striped">
                    <tr>
                    <th scope="col">Id_bahasa</th>
                    <th scope="col">Nama_bahasa</th>
                    </tr>
                    @foreach($bahasa as $b)
                    <tr>
                    <td scope="col">{{$p->Id_bahasa}}</td>
                    <td scope="col">{{$p->Nama_bahasa}}</td>
                    
                    <td>
                    <a href="/Bahasa/edit/{{$p->Id_bahasa}}">EDIT</a>
                    <a href="/Bahasa/hapus/{{$p->Id_bahasa}}">HAPUS</a>
                        </td>
                </tr>
                @endforeach
                  </table>
                </body>
                    </html>
                    @endsection