<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\User;
use App\Models\Kelas;
use App\Models\Transaksi;
use Carbon\carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index() {
        $jumlah_siswa = Siswa::count();
        $jumlah_kelas = Kelas::count();
        $jumlah_user = User::count();

        return view('dashboard',compact(['jumlah_siswa','jumlah_kelas','jumlah_user']));
    }
}
