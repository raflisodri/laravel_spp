<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spp extends Model
{
    use HasFactory;
    protected $fillable = ['keterangan','tahun', 'nominal'];
    protected $table = 'spps';
}
