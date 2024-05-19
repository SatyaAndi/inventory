<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

   protected $table = 'barangs';
    protected $primaryKey = 'kode_barang';
    // public $incrementing = false;
    // protected $keyType = 'int';


    protected $fillable = [

        'nama_barang',
        'unit',
        'ukuran',
        'warna',
        'jenis',
        'harga_satuan',
        'stok'

    ];
}
