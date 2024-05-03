<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Barang;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $table = Barang::create([
            'nama_barang' => 'Bromo',
            'harga_barang' => 1000000,
            'jumlah_barang' => 3

        ]);
        
        $table = Barang::create([
            'nama_barang' => 'rinjani',
            'harga_barang' => 200000,
            'jumlah_barang' => 1

        ]);
        $table = Barang::create([
            'nama_barang' => 'semeru',
            'harga_barang' => 200000,
            'jumlah_barang' => 1

        ]);
    
    $table = Barang::create([
        'nama_barang' => 'pandaan',
        'harga_barang' => 300000,
        'jumlah_barang' => 1

    ]);
    
    $table = Barang::create([
        'nama_barang' => 'trawas',
        'harga_barang' => 500000,
        'jumlah_barang' => 1

    ]);
    
    $barangs = Barang::all();
    return view('barang', compact('barangs'));
   
       
        
        
    }
}
