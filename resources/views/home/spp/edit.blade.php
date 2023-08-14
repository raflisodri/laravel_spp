@extends('master')
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
                           <h3>EDIT DATA SPP</h3>
                        </div>
                        <div class="card-body">
                            <form action="/spp/update/{{$spp->id}}" method="POST">
                                @csrf
                                <div class="form-group">
                                  <label>Keterangan</label>
                                  <input type="text" class="form-control" name="keterangan" id="" placeholder="Masukan Keterangan" value="{{$spp->keterangan}}">
                                </div>
                                <div class="form-group">
                                    <label>Tahun</label>
                                    <input type="number" class="form-control" name="tahun" id="" placeholder="Masukan Tahun" value="{{$spp->tahun}}">
                                  </div>
                                  <div class="form-group">
                                    <label>Nominal</label>
                                    <input type="number" class="form-control" name="nominal" id="" placeholder="Masukan nominal" value="{{$spp->nominal}}">
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