@section('content')
@section('title','FORM TAMBAH DATA SISWA')
@extends('master')  
<br>
<br>
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                           <h3>TAMBAH DATA SISWA</h3>
                        </div>
                        <div class="card-body">
                            <form action="/siswa/simpan" method="POST">
                                @csrf
                                <div class="form-group">
                                  <label>Nis</label>
                                  <input type="number" class="form-control" name="nis" id="" placeholder="Masukan Nis">
                                </div>
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" class="form-control" name="nama" id="" placeholder="Masukan Nama">
                                  </div>
                                  {{-- <div class="form-group">
                                    <label>Kelas</label>
                                    <input type="text" class="form-control" name="kelas" id="" placeholder="Masukan Kelas">
                                  </div> --}}

                                  <div class="form-group">
                                    <label>Kelas</label>
                                    <select name="kelas" class="form-control" id="">
                                      @foreach ($kelas as $kelas)
                                          <option  value="{{$kelas->id}}">{{$kelas->id}} - {{$kelas->nama_kelas}}</option>
                                      @endforeach
                                    </select>

                                  <div class="form-group">
                                    <label>Alamat</label>
                                    <input type="text" class="form-control" name="alamat" id="" placeholder="Masukan Alamat">
                                  </div>
                                  <div class="form-group">
                                    <label>No Telp</label>
                                    <input type="number" class="form-control" name="no_telp" id="" placeholder="Masukan No Telp">
                                  </div>
                                  <button type="submit" class="btn btn-primary">simpan</button>
                                  <button type="reset" class="btn btn-secondary">reset</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection