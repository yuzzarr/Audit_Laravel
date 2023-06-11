<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periode extends Model
{
    use HasFactory;

    protected $table = 'periode';
    protected $primarykey = 'id_Periode';

    protected $fillable = [
        'tanggal_periode',
        'no_sk',
        'file_sk',
        'ketua_spi',
        'nip_ketua_spi'
    ];
}
