<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $fillable = ['nis','nama', 'kelas','alamat','no_telp'];
    protected $table = 'siswas';
    protected $primaryKey ='nis';

    public function siswa()
    {
        return $this->hasMany(Siswa::class,'nis','nis');
    }

    
    public function kelas()
    {
        return $this->belongsTo(Kelas::class,'kelas','id');
    }

   
}
