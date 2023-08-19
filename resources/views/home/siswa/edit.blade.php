@section('content')
@section('title','EDIT SISWA')
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
                           <h3>EDIT DATA SISWA</h3>
                        </div>
                        <div class="card-body">
                            <form action="/siswa/update/{{$siswa->nis}}" method="POST">
                                @csrf
                                <div class="form-group">
                                  <label>Nama</label>
                                  <input type="text" class="form-control" name="nama" id="" placeholder="Masukan Nama" value="{{$siswa->nama}}">
                                </div>
                                {{-- <div class="form-group">
                                    <label>Kelas</label>
                                    <input type="text" class="form-control" name="kelas" id="" placeholder="Masukan Kelas" value="{{$siswa->kelas}}">
                                  </div> --}}
                                  <div class="form-group">
                                    <label>Kelas</label>
                                    <select name="id_kelas" class="form-control" id="">
                                      @foreach ($kelas as $kelas)
                                          <option  value="{{$kelas->id}}">{{$kelas->id}} - {{$kelas->nama_kelas}}</option>
                                      @endforeach
                                    </select>

                                  <div class="form-group">
                                    <label>alamat</label>
                                    <input type="text" class="form-control" name="alamat" id="" placeholder="Masukan alamat" value="{{$siswa->alamat}}">
                                  </div>
                                  <div class="form-group">
                                    <label>No Telp</label>
                                    <input type="number" class="form-control" name="no_telp" id="" placeholder="Masukan No Telp" value="{{$siswa->no_telp}}">
                                  </div>
                                 
                                  <button type="submit" class="btn btn-primary">simpan</button>
                                  <button type="reset" class="btn btn-danger">reset</button>
                                  <a href="/siswa"class="btn btn-secondary">kembali</a>
 
                                                                                                      
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection