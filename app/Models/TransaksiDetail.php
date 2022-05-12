<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class TransaksiDetail extends Model 
{
    use HasFactory;

    protected $table = "transaksi_detail";
    protected $fillable = [
        "id_transaksi", 
        "id_barang", 
        "jumlah", 
        "harga_satuan", 
        "sub_total"
    ];

    static function getDataTable($transaksi_id) 
    {
        $result = TransaksiDetail::orderBy("id", "asc")
        ->get();

        return $result;
    }
}
