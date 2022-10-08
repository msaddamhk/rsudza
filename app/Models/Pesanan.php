<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    protected $table = "pesanans";
    protected $fillable = ['user_id', 'nama_penerima', 'pilihan', 'pecahan', 'notlp', 'alamat', 'konfirmasi',  'pembayaran', 'totalkeuntungan', 'total_ongkir', 'total_harga', 'berat', 'kodepesanan', 'transaction_status', 'diskripsi'];

    public function items()
    {
        return $this->hasMany(PesananItems::class);
    }
}
