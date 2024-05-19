<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenerimaanBarang extends Model
{
    use HasFactory;

    //protected $table = 'penerimaan_barang';
    protected $primaryKey = 'id_penerimaan';
    // public $incrementing = false;
    // protected $keyType = 'int';

    protected $fillable = [
        'id_penerimaan',
        'tgl_penyimpanan',
        'alamat',
        'kode_barang',
        'kuantity'
    ];

    public function barang(){

        return $this->belongsTo(Barang::class, 'kode_barang', 'kode_barang');

    }

}
