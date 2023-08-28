@section('content')
 @extends('master')   

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$jumlah_siswa}}</h3>

                <p>JUMLAH SISWA</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$jumlah_kelas}}</h3>

                <p>JUMLAH KELAS</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{$jumlah_user}}</h3>

                <p>JUMLAH USER</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>
                  @if($total_minggu->total_price == null)
                  0
                  @else
                  {{$total_minggu->total_price}}
                  @endif
                </h3>

                <p>Unique Visitors</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
    </section>

    <section class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3>Sample Table</h3>
                </div>
                <div class="card-body">
                  <table class="table" id="example">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Nis-Nama</th>
                            <th>Tanggal bayar</th>
                            <th>Spp</th>
                            <th>Jumlah </th>
                            <th>Keterangan</th>
                            <th>id petugas</th>
                    
                        </tr>

                    </thead>
                    <tbody>
                            @foreach ($transaksi as $k)
                                
                                    <tr>
                                        <td>{{$k->id_transaksi}}</td>
                                        <td>{{$k->nis}} - {{$k->siswa->nama}}</td>
                                        <td>{{$k->tanggal_bayar}}</td>
                                        <td>{{$k->id_spp}} - {{$k->spp->keterangan}}</td>
                                        <td>{{$k->jumlah_bayar}}</td>
                                        <td>{{$k->keterangan}}</td>
                                        <td>{{$k->id_petugas}} - {{$k->user->name}}</td> 
                                      
                                    </tr>
                              
                                @endforeach
                              </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
    </section>

  </div>
  @endsection