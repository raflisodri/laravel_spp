@section('content')
@section('title','TAMBAH TRANSAKSi')
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
                           <h3>TAMBAH DATA TRANSAKSI</h3>
                        </div>
                        <div class="card-body">
                            <form action="/transaksi/simpan" method="POST">
                                @csrf
                                <div class="form-group">
                                  <label>Id Transaksi</label>
                                  <input type="text" class="form-control" name="id_transaksi" id="" placeholder="Masukan id transaksi">
                                </div>
                                  <div class="form-group">
                                    <label>Nama/Nis</label>
                                    <select name="nis" class="form-control" id="">
                                      @foreach ($siswa as $siswa)
                                          <option  value="{{$siswa->nis}}">{{$siswa->nis}} - {{$siswa->nama}}</option>
                                      @endforeach
                                    </select>

                                  <div class="form-group">
                                    <label>Tanggal Bayar</label>
                                    <input type="date" class="form-control" name="tanggal_bayar" id="" placeholder="Masukan tanggal bayar">
                                  </div>

                                  <div class="form-group">
                                    <label>Spp</label>
                                    <select name="id_spp" class="form-control" id="">
                                      @foreach ($spp as $spp)
                                          <option  value="{{$spp->id}}">{{$spp->id}} - {{$spp->keterangan}}</option>
                                      @endforeach
                                    </select>

                                  <div class="form-group">
                                    <label>Jumlah Bayar</label>
                                    <input type="number" class="form-control" name="jumlah_bayar" id="" placeholder="Masukan Jumlah Bayar">
                                  </div>
                                  <div class="form-group">
                                    <label>keterangan</label>
                                    <input type="text" class="form-control" name="keterangan" id="" placeholder="Masukan Keterangan">
                                  </div>
                                    <div class="form-group">
                                      <label>Petugas</label>
                                      <select class="form-control" name="id_petugas" id="">
                                        @foreach ($user as $user)
                                            <option value="{{$user->id_petugas}}"> {{$user->id}} - {{$user->name}}</option>
                                        @endforeach
                                      </select>
                                    
                          

                                  <button type="submit" class="btn btn-primary">simpan</button>
                                  <button type="reset" class="btn btn-danger">reset</button>
                                  <a href="/transaksi"class="btn btn-secondary">kembali</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection