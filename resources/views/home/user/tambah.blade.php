@extends('master')
@section('title','TAMBAH USER')
@section('content')
<br>
<br>
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                           <h3>TAMBAH DATA USER</h3>
                        </div>
                        <div class="card-body">
                            <form action="/user/simpan" method="POST">
                                @csrf
                                <div class="form-group">
                                  <label>Nama</label>
                                  <input type="text" class="form-control" name="name" id="" placeholder="Masukan nama">
                                </div>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control" name="username" id="" placeholder="Masukan username">
                                  </div>
                                  <div class="form-group">
                                    <label>password</label>
                                    <input type="text" class="form-control" name="password" id="" placeholder="Masukan password">
                                  </div>
                                  <button type="submit" class="btn btn-primary">simpan</button>
                                  <button type="reset" class="btn btn-danger">reset</button>
                                  <a href="/user"class="btn btn-secondary">kembali</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection