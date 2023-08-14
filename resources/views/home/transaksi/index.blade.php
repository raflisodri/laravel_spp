@section('content')
@section('title','DATA Transaksi')
@extends('master')    

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                           <h3>TAMPIL DATA TRANSAKSI</h3>
                           <a href="transaksi/tambah" class="btn btn-info">Tambah</a> 
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Nis</th>
                                        <th>Tanggal bayar</th>
                                        <th>Spp</th>
                                        <th>Jumlah </th>
                                        <th>Keterangan</th>
                                        <th>id petugas</th>
                                        <th>Aksi</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($transaksi as $k)
                                
                                    <tr>
                                        <td>{{$k->id_transaksi}}</td>
                                        <td>{{$k->nis}}</td>
                                        <td>{{$k->tanggal_bayar}}</td>
                                        <td>{{$k->id_spp}}</td>
                                        <td>{{$k->jumlah_bayar}}</td>
                                        <td>{{$k->keterangan}}</td>
                                        <td>{{$k->id_petugas}}</td> 
                                        <td>
                                            <a href="/transaksi/edit/{{$k->id_transaksi}}" class="btn btn-warning">edit</a>
                                            <a href="/transaksi/delete/{{$k->id_transaksi}}" class="btn btn-danger" onclick="return confirm('Yakin data akan di hapus')">delete</a>
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
