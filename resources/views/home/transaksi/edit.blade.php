@section('content')
@section('title','FORM TAMBAH DATA TRANSAKSi')
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
                            <form action="/transaksi/update/{{$transaksi->id_transaksi}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label>Nis</label>
                                    <input type="text" class="form-control" name="nis" id="" placeholder="Masukan Nis" value="{{$transaksi->nis}}">
                                  </div>
                                  <div class="form-group">
                                    <label>Tanggal Bayar</label>
                                    <input type="date" class="form-control" name="tanggal_bayar" id="" placeholder="Masukan tanggal bayar" value="{{$transaksi->tanggal_bayar}}">
                                  </div>
                                  <div class="form-group">
                                    <label>Id Spp</label>
                                    <input type="text" class="form-control" name="id_spp" id="" placeholder="Masukan id_spp" value="{{$transaksi->id_spp}}">
                                  </div>
                                  <div class="form-group">
                                    <label>Jumlah Bayar</label>
                                    <input type="number" class="form-control" name="jumlah_bayar" id="" placeholder="Masukan Jumlah Bayar" value="{{$transaksi->jumlah_bayar}}">
                                  </div>
                                  <div class="form-group">
                                    <label>keterangan</label>
                                    <input type="text" class="form-control" name="keterangan" id="" placeholder="Masukan Keterangan" value="{{$transaksi->keterangan}}">
                                  </div>
                                  <div class="form-group">
                                    <label>Petugas</label>
                                    <input type="text" class="form-control" name="id_petugas" id="" placeholder="Masukan id petugas" value="{{$transaksi->id_petugas}}">
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