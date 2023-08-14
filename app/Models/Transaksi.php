<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $fillable = ['id_transaksi','nis','tanggal_bayar', 'id_spp','jumlah_bayar','keterangan','id_petugas'];
    protected $table = 'transaksis';
    protected $primaryKey='id_transaksi';

    public function siswa()
    {
        return $this->belongsTo(siswa::class,'nis','nis');
    }
    public function user()
    {
        return $this->belongsTo(user::class,'id_petugas','id');
    }
}
