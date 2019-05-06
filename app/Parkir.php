<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parkir extends Model
{
   protected $fillable = ['jenis','nama_kendaraan','plat_nomor','jam_keluar'];
}
