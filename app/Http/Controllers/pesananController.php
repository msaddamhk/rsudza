<?php

namespace App\Http\Controllers;


use Exception;
use Midtrans\Config;
use Midtrans\Snap;
use App\Models\cities;
use App\Models\provinces;
use App\Models\Keranjang;
use Midtrans\Notification;
use App\Models\Pesanan;
use App\Models\PesananItems;
use Egulias\EmailValidator\Warning\Warning;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    public function index()
    {
        $keranjang = Keranjang::where('id_user', auth()->user()->id)->get();
        return view('pesanan', compact('keranjang'));
    }
    public function pesanan(Request $request)
    {
        $code = 'Kantin-RSUDZA-' . mt_rand(0000, 9999);
        $keranjang = Keranjang::where('id_user', auth()->user()->id)->get();
        $pesanan = Pesanan::create([
            'user_id' => auth()->user()->id,
            "nama_penerima" => $request->nama,
            "notlp" => $request->notelepon,
            "alamat" => $request->alamat,
            "pembayaran" => $request->pembayaran,
            "berat" => 1,
            "diskripsi" => $request->deskripsi,
            "total_ongkir" => 5000,
            "total_harga" => $request->harga,
            "transaction_status" =>  'PENDING',
            "kodepesanan" => $code,
            "konfirmasi" => 'BELUM DI KONFIRMASI',
            "totalkeuntungan" => $request->keuntungan,
            "pilihan" => $request->pilihan

        ]);
        $databarang = [];
        foreach ($keranjang as $keranjangs) {
            $pesananitems = PesananItems::create([
                'pesanan_id' => $pesanan->id,
                'barang_id' => $keranjangs->id_barang,
                'jumlah' => $keranjangs->jumblah
            ]);
            array_push(
                $databarang,
                [
                    'id' => $pesanan->id,
                    'name'    => $pesananitems->barang->judul,
                    'price'    => (int)$pesananitems->barang->harga,
                    'quantity'   =>  $keranjangs->jumblah
                ]
            );
        }
        array_push(
            $databarang,
            [
                'id' => rand(),
                'name' => 'Ongkos Kirim',
                'price' => 5000,
                'quantity' => 1,
            ]
        );
        // keranjang::where('id_user', auth()->user()->id)->delete();
        // wa
        $wa = "https://api.whatsapp.com/send?phone=6285760557702&text=Data Pesanan :%0A" . '- ' . 'Atas Nama : ' . $request->nama . '%0A' . '- ' . 'Alamat : ' . $request->alamat . '%0A' . '- ' . 'Deskripsi Pesanan : ' . $request->deskripsi . '%0A' . '%0A' . 'Ingin memesan :' . '%0A';
        foreach ($keranjang as $keranjangs) {
            $wa .= '- ' . $keranjangs->barang->judul  . ' | sebanyak ' . $keranjangs->jumblah . " buah" .  ' | Sub Harga Rp. ' . number_format($keranjangs->barang->harga * $keranjangs->jumblah) . '%0A';
        };
        $wa .= '%0A' . 'Detail Pembayaran : ' . '%0A' . 'Total Harga Barang : ' .  'Rp. ' .  number_format($request->harga) . '%0A'  .  'Ongkos Kirim : ' . 'Rp. ' . number_format(5000)  . '%0A' .
            'Total Harga : ' . 'Rp. ' . number_format($request->harga + 5000) . '%0A' .  'Pilihan : ' . $request->pilihan;

        //  midtrans
        Config::$serverKey = config('services.midtrans.serverKey');
        Config::$isProduction = config('services.midtrans.isProduction');
        Config::$isSanitized = config('services.midtrans.isSanitized');
        Config::$is3ds = config('services.midtrans.is3ds');

        // Buat array untuk dikirim ke midtrans
        $midtrans = array(
            'transaction_details' => array(
                'order_id' =>  $code,
                'gross_amount' => (int) $request->harga + 5000,
            ),
            'customer_details' => array(
                'first_name'    => Auth::user()->name,
                'email'         => Auth::user()->email,
                'phone'   => $request->notelepon,
            ),
            'item_details' => $databarang,
            'enabled_payments' => array('bank_transfer'),
            'vtweb' => array()
        );
        try {
            // Ambil halaman payment
            $paymentUrl = Snap::createTransaction($midtrans)->redirect_url;

            // Redirect ke halaman midtrans
            if ($request->pembayaran == 'Online') {
                return redirect($paymentUrl);
            }
            // Redirect ke halaman WA
            // return redirect($wa);
            return redirect('/pesanandetail');
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    public function pesanandetail()
    {
        $datatransaksi = Pesanan::where('user_id', auth()->id())->latest()->get();
        $title = "Pesanan";
        return view('invoice', compact('datatransaksi', 'title'));
    }
}



// calback
// public function callback(Request $request)
// {
//     Set konfigurasi midtrans
//     Config::$serverKey = config('services.midtrans.serverKey');
//     Config::$isProduction = config('services.midtrans.isProduction');
//     Config::$isSanitized = config('services.midtrans.isSanitized');
//     Config::$is3ds = config('services.midtrans.is3ds');

//     Buat instance midtrans notification
//     $notification = new Notification();

//     Assign ke variable untuk memudahkan coding
//     $status = $notification->transaction_status;
//     $type = $notification->payment_type;
//     $fraud = $notification->fraud_status;
//     $order_id = $notification->order_id;

//     Cari transaksi berdasarkan ID
//     $transaction = Pesanan::findOrFail($order_id);

//     Handle notification status midtrans
//     if ($status == 'capture') {
//         if ($type == 'credit_card') {
//             if ($fraud == 'challenge') {
//                 $transaction->transaction_status = 'PENDING';
//             } else {
//                 $transaction->transaction_status = 'SUCCESS';
//             }
//         }
//     } else if ($status == 'settlement') {
//         $transaction->transaction_status = 'SUCCESS';
//     } else if ($status == 'pending') {
//         $transaction->transaction_status = 'PENDING';
//     } else if ($status == 'deny') {
//         $transaction->transaction_status = 'CANCELLED';
//     } else if ($status == 'expire') {
//         $transaction->transaction_status = 'CANCELLED';
//     } else if ($status == 'cancel') {
//         $transaction->transaction_status = 'CANCELLED';
//     }

//     Simpan transaksi
//     $transaction->save();
// }
