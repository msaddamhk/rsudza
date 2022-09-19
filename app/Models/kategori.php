<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Models\barang;

class kategori extends Model
{
    protected $guarded = ['id'];

    public function barangs()
    {
        return $this->hasMany(barang::class);
    }
}
