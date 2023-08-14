@section('content')
@section('title','DATA SISWA')
@extends('master')    

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                           <h3>TAMPIL DATA SISWA</h3>
                           <a href="siswa/tambah" class="btn btn-info">Tambah</a> 
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Nis</th>
                                        <th>Nama</th>
                                        <th>Kelas</th>
                                        <th>Alamat</th>
                                        <th>No Telp</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($siswa as $k)
                                
                                    <tr>
                                        <td>{{$k->nis}}</td>
                                        <td>{{$k->nama}}</td>
                                        <td>{{$k->kelas}} - {{$k->kelas->nama_kelas}}<td>
                                        <td>{{$k->alamat}}</td>
                                        <td>{{$k->no_telp}}</td>
                                        <td>
                                            <a href="/siswa/edit/{{$k->nis}}" class="btn btn-warning">edit</a>
                                            <a href="/siswa/delete/{{$k->nis}}" class="btn btn-danger" onclick="return confirm('Yakin data akan di hapus')">delete</a>
                                        </td>
                                    </tr>
                                </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
