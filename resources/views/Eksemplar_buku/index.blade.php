@extends('layout/home')
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1 class="mt-3">Daftar Eksemplar</h1>
                    <a href="/Eksemplar_buku/create"> + Tambah Eksemplar</a>

                    <table class="table table-striped">
                    <tr>
                    <th scope="col">Kode_buku</th>
                    <th scope="col">No_ISBN</th>
                    <th scope="col">Status_eksemplar_buku</th>
                    <th scope="col">Kondisi_eksemplar_buku</th>
                    </tr>
                    @foreach($eksemplar_buku as $e)
                    <tr>
                    <td scope="col">{{$e->Kode_buku}}</td>
                    <td scope="col">{{$e->No_ISBN}}</td>
                    <td scope="col">{{$e->Status_eksemplar_buku}}</td>
                    <td scope="col">{{$e->Password}}</td>
                    <td scope="col">{{$e->Kondisi_eksemplar_buku}}</td>
                    
                    <td>
                    <a href="/Eksemplar_buku/edit/{{$e->Kode_buku}}">EDIT</a>
                    <a href="/Eksemplar_buku/hapus/{{$e->Kode_buku}}">HAPUS</a>
                        </td>
                </tr>
                @endforeach
                  </table>
                </body>
                    </html>
                    @endsection