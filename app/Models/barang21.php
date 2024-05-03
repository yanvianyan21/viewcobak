<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang2 extends Model
{
    protected $table = "barang2";
    protected $primarykey = "id";
    protected $fillable = ['nama'];

    use HasFactory;
}