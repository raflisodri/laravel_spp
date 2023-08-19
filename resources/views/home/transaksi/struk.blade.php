<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Struk</title>
</head>
<body onload="window.print()">
    <table width="400px">
        <tr align="center">
            <td colspan="3"><b>SPP MARHAS</b></td>
        </tr>
        <tr align="center">
            <td colspan="3">Struk Pembayaran SPP</td>
        </tr>
        <tr>
            <td colspan="3"><hr></td>
        </tr>
        <tr>
            <td colspan="2"> Petugas : {{ Auth()->User()->name }}</td>
            <td  align="right">Tanggal : <?php echo date("Y/m/d");?></td>
        </tr>
        <tr>
            <td colspan="3"><hr></td>
        </tr>
        <tr>
            <td> <b>NAMA</b> </td>
            <td align="right">:</td>
            <td>{{ $transaksi->siswa->nama }}</td>
        </tr>
        <tr>
            <td> <b>SPP</b> </td>
            <td align="right">:</td>
            <td>{{ $transaksi->id_spp }}</td>
        </tr>
        <tr>
            <td> <b>total</b></td>
            <td align="right">:</td>
            <td>Rp.{{number_format($transaksi->jumlah_bayar,2,',','.')}}</td>
        </tr>
       
        <tr>
            <td colspan="3"><hr></td>
        </tr>
        <tr>
            <td colspan="3">
                Note: 
                <br>
                <b>- Struk ini sebagai bukti pembayaran</b>
                <br>
                <b>- Harap simpan dengan baik</b>
            </td>
        </tr>
    </table>
</body>
</html>