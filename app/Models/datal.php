<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datal extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    // protected $fillable = ['nama_barang', 'jumlah_barang', 'status_pembayaran'];
}
