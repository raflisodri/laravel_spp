<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\User;
use App\Models\Kelas;
use App\Models\Transaksi;
use Carbon\carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon as SupportCarbon;

class DashboardController extends Controller
{
    function index() {
        $jumlah_siswa = Siswa::count();
        $jumlah_kelas = Kelas::count();
        $jumlah_user = User::count();
        $transaksi = Transaksi::Select()->orderBy ('tanggal_bayar','DESC')
        ->limit(5)
        ->get();

        $today = Carbon::today();
        $endDate = Carbon::today()->addDays(7);
        $total_minggu = Transaksi::Select(Transaksi::raw ('SUM(jumlah_bayar) as total_price'))
        
        ->whereBetween('tanggal_bayar',[$today, $endDate])->first();


        return view('dashboard',compact('jumlah_siswa','jumlah_kelas','jumlah_user','transaksi'),['total_minggu'=>$total_minggu]);
    }
}
