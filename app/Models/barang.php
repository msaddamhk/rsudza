<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class barang extends Model
{
    protected $guarded = ['id'];

    public function kategori()
    {
        return $this->belongsTo(kategori::class, 'kategori_id');
    }
    public function keranjang()
    {
        return $this->hasMany(keranjang::class, 'id');
    }
    // public function items()
    // {
    //     return $this->hasMany(PesananItems::class, 'id');
    // }
}
