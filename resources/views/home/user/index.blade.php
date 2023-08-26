@extends('master')
@section('title','DATA USER')
@section('content')

<br>
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                           <h3>TAMPIL DATA USER</h3>
                           <a href="user/tambah" class="btn btn-info">Tambah</a>
                           <a href="user/change-password"  class="btn btn-warning">Manage password</a>
                        </div>
                        <div class="card-body">
                            <table class="table" id="example">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nama</th>
                                        <th>Username</th>
                                        <th>Level</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($user as $k)
                                        
                                   
                                    <tr>
                                        <td>{{$k->id}}</td>
                                        <td>{{$k->name}}</td>
                                        <td>{{$k->username}}</td>
                                        <td>{{$k->level}}</td>
                                        <td>
                                            <a href="/user/edit/{{$k->id}}" class="btn btn-warning">edit</a>
                                            <a href="/user/delete/{{$k->id}}" class="btn btn-danger" onclick="return confirm('Yakin data akan di hapus')">delete</a>
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