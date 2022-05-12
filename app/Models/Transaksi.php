<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Transaksi extends Model 
{
    use HasFactory;

    protected $table = "transaksi";
    protected $fillable = [
        "tanggal_transaksi", 
        "kode_transaksi", 
        "nama_pelanggan", 
        "total_barang", 
        "total_harga",
    ];

    static function getDataTable($id_user) 
    {
        $result = Transaksi::where('id_user', $id_user)
        ->orderBy("tanggal_transaksi", "asc")
        ->get();

        return $result;
    }

    static function getData($id)
    {
        $result["transaksi"] = Transaksi::where("id", $id)->get();
        $result["transaksi_detail"] = TransaksiDetail::getDataTable($id);

        return $result;
    } 
}
