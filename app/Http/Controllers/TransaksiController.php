<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Spp;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksi = Transaksi::all();
        $spp = Spp::all();
        $user = User::all();
        $siswa = Siswa::all();
        return view('home.transaksi.index',compact(['transaksi','spp','siswa','user']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $transaksi = Transaksi::all();
        $spp = Spp::all();
        $user = User::all();
        $siswa = Siswa::all();
        return view('home.transaksi.tambah',compact(['transaksi','spp','siswa','user']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Transaksi::create([
            'id_transaksi'=>$request->id_transaksi,
            'nis'=>$request->nis,
            'tanggal_bayar'=>$request->tanggal_bayar,
            'id_spp'=>$request->id_spp,
            'jumlah_bayar'=>$request->jumlah_bayar,
            'keterangan'=>$request->keterangan,
            'id_petugas'=>Auth()->User()->id,
            
            $request->except(['_token']),
        ]);
            return redirect('/transaksi')->with('succes', 'Berhasil Memasukan Data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_transaksi)
    {
        $transaksi = Transaksi::find($id_transaksi);
        $spp = Spp::all();
        $user = User::all();
        $siswa = Siswa::all();
        return view('home.transaksi.edit',compact(['transaksi','spp','siswa','user']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_transaksi)
    {
        $transaksi = Transaksi::find($id_transaksi);
        $spp = Spp::all();
        $user = User::all();
        $siswa = Siswa::all();
        $transaksi->update([
            'nis'=>$request->nis,
            'tanggal_bayar'=>$request->tanggal_bayar,
            'id_spp'=>$request->id_spp,
            'jumlah_bayar'=>$request->jumlah_bayar,
            'keterangan'=>$request->keterangan,
            'id_petugas'=>Auth()->User()->id,
            
            $request->except(['_token']),
        ]);
            return redirect('/transaksi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_transaksi)
    {
        $transaksi = Transaksi::find($id_transaksi);
        $transaksi->delete();
        return redirect('/transaksi');
    }

    public function cetak()
    {
        $transaksi = Transaksi::all();
        $spp = Spp::all();
        $siswa = Siswa::all();
        $user = User::all();
        return view('home.transaksi.cetak',compact('transaksi','spp','siswa','user'));
    }

    public function struk($id_transaksi)
    {
        $transaksi = Transaksi::find($id_transaksi);
        $spp = Spp::all();
        $siswa = Siswa::all();
        $user = User::all();
        return view('home.transaksi.struk',compact('transaksi','spp','siswa','user'));
    }

}
