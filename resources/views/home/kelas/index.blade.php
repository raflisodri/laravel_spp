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
                           <h3>TAMPIL DATA KELAS</h3>
                           <a href="kelas/tambah" class="btn btn-info">Tambah</a> 
                        </div>
                        <div class="card-body">
                            <table class="table" id="example">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nama Kelas</th>
                                        <th>Kompetensi keahlian</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($kelas as $k)
                                        
                                   
                                    <tr>
                                        <td>{{$k->id}}</td>
                                        <td>{{$k->nama_kelas}}</td>
                                        <td>{{$k->kompetensi_keahlian}}</td>
                                        <td>
                                            <a href="/kelas/edit/{{$k->id}}" class="btn btn-warning">edit</a>
                                            <a href="/kelas/delete/{{$k->id}}" class="btn btn-danger" onclick="return confirm('Yakin data akan di hapus')">delete</a>
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