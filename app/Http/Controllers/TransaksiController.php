<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
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
        return view('home.transaksi.index',compact(['transaksi']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $transaksi = Transaksi::all();
        return view('home.transaksi.tambah');
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
            'id_petugas'=>$request->id_petugas,
            
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
        return view('home.transaksi.edit',compact(['transaksi']));
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
        $transaksi->update([
            'nis'=>$request->nis,
            'tanggal_bayar'=>$request->tanggal_bayar,
            'id_spp'=>$request->id_spp,
            'jumlah_bayar'=>$request->jumlah_bayar,
            'keterangan'=>$request->keterangan,
            'id_petugas'=>$request->id_petugas,
            
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
}
