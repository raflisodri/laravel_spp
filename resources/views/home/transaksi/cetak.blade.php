<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>cetak data</title>
</head>
<body onload="print()">
    <table class="table" border="1">
        <thead>
            <tr>
                <th>id</th>
                <th>Nis</th>
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
                <td>{{$k->nis}}</td>
                <td>{{$k->tanggal_bayar}}</td>
                <td>{{$k->id_spp}} - {{$k->spp->keterangan}}</td>
                <td>{{$k->jumlah_bayar}}</td>
                <td>{{$k->keterangan}}</td>
                <td>{{$k->id_petugas}} - {{$k->user->name}}</td> 
            </tr>
        </tbody>
        @endforeach
    </table>
</body>
</html>