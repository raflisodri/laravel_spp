@extends('master')
@section('title','EDIT KELAS')
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
                           <h3>EDIT DATA KELAS</h3>
                        </div>
                        <div class="card-body">
                            <form action="/kelas/update/{{$kelas->id}}" method="POST">
                                @csrf
                                <div class="form-group">
                                  <label>Nama Kelas</label>
                                  <input type="text" class="form-control" name="nama_kelas" id="" placeholder="Masukan nama kelas" value="{{$kelas->nama_kelas}}">
                                </div>
                                <div class="form-group">
                                    <label>Kompetensi Keahlian</label>
                                    <input type="text" class="form-control" name="kompetensi_keahlian" id="" placeholder="Masukan kompetensi keahlian" value="{{$kelas->kompetensi_keahlian}}">
                                  </div>
                                  <button type="submit" class="btn btn-primary">simpan</button>
                                  <button type="reset" class="btn btn-danger">reset</button>
                                  <a href="/kelas"class="btn btn-secondary">kembali</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection