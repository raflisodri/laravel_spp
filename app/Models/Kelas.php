<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $fillable = ['nama_kelas','kompetensi_keahlian'];
    protected $table = 'kelas';

    public function kelas()
    {
        return $this->hasMany(Kelas::class,'id_kelas','id');
    }
}
