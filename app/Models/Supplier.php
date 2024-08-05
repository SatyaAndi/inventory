<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $table = 'supplier';
    protected $primaryKey = 'kode_supplier';

    protected $fillable = [
        'kode_supplier',
        'nama_supplier',
        'telepon',
        'alamat'
    ];

    public $timestamps = true; // default timestamps true, bisa dihapus juga karena ini default

    // bisa dihapus
}
