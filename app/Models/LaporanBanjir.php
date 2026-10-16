<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LaporanBanjir extends Model
{
    protected $fillable = ['nama_pelapor','lokasi',
      'tinggi_air','keterangan','status'];
}