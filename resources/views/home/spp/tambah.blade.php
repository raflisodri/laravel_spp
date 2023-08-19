@extends('master')\
@section('title','TAMBAH SPP')
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
                           <h3>TAMBAH DATA SPP</h3>
                        </div>
                        <div class="card-body">
                            <form action="/spp/simpan" method="POST">
                                @csrf
                                <div class="form-group">
                                  <label>Keterangan</label>
                                  <input type="text" class="form-control" name="keterangan" id="" placeholder="Masukan Keterangan">
                                </div>
                                <div class="form-group">
                                    <label>Tahun</label>
                                    <input type="number" class="form-control" name="tahun" id="" placeholder="Masukan Tahun">
                                  </div>
                                  <div class="form-group">
                                    <label>Nominal</label>
                                    <input type="number" class="form-control" name="nominal" id="" placeholder="Masukan Nominal">
                                  </div>

                                  <button type="submit" class="btn btn-primary">simpan</button>
                                  <button type="reset" class="btn btn-danger">reset</button>
                                  <a href="/spp"class="btn btn-secondary">kembali</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection