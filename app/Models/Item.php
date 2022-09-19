<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
  public function barang()
  {
    return $this->belongsTo('App\barang', 'barang_id', 'id');
  }
  public function order()
  {
    return $this->belongsTo('App\pesananterbaru1', 'pesanan_id', 'id');
  }
}
