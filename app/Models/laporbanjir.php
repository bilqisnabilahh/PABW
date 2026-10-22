<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class laporbanjir extends Model
{
    protected $table = 'laporbanjir';

    protected $fillable = [
        'nama_pelapor',
        'lokasi',
        'tinggi_genangan',
        'tanggal_kejadian',
    ];
}
