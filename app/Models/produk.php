<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    use HasFactory;

    protected $table = 'produk';

    protected $fillable = ['produk_id', 'nama', 'stok', 'harga', 'keterangan'];

    public $timestamps = false;
}
