<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang2 extends Model
{
    use HasFactory;

    protected $table = 'barang2';

    protected $primarykey = 'id';

    protected $fillable = [
        'id',
        'nama_barang',
        'harga_barang',
        'jumlah_barang',
    ];
}