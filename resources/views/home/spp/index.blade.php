@extends('master')
@section('content')

<br>
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                           <h3>TAMPIL DATA SPP</h3>
                           <a href="spp/tambah" class="btn btn-info">Tambah</a> 
                        </div>
                        <div class="card-body">
                            <table class="table" id="example">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Keterangan</th>
                                        <th>Tahun</th>
                                        <th>Nominal</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($spp as $k)                                  
                                    <tr>
                                        <td>{{$k->id}}</td>
                                        <td>{{$k->keterangan}}</td>
                                        <td>{{$k->tahun}}</td>
                                        <td>{{$k->nominal}}</td>
                                        <td>
                                            <a href="/spp/edit/{{$k->id}}" class="btn btn-warning">edit</a>
                                            <a href="/spp/delete/{{$k->id}}" class="btn btn-danger" onclick="return confirm('Yakin data akan di hapus')">delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
    
@endsection