<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesananItems extends Model
{
    use HasFactory;
    protected $table = "pesanan_items";
    protected $fillable = ['pesanan_id', 'barang_id', 'jumlah'];

    public function pesanan()
    {
        return $this->belongsTo(Pesanan::class);
    }

    public function barang()
    {
        return $this->belongsTo(barang::class);
    }
}
