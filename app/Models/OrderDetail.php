<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    protected $table = 'orderdetail';

    protected $fillable = [
        'no_po',
        'kode_barang',
        'nama_barang',
        'harga',
        'kuantity',
        'tanggal_simpan'
    ];
    public function supplier()
    {
        return $this->belongsTo(orderbarang::class, 'no_po', 'no_po');
    }
    public function orderbarang()
    {
        return $this->belongsTo(Barang::class, 'kode_barang', 'kode_barang');
    }
}
