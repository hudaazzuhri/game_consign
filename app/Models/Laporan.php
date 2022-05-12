<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Laporan extends Model 
{
    use HasFactory;

    protected $table = "laporan";


    static function getSearch($mulai_tanggal, $sampai_tanggal)
    {
        $result = Laporan::whereBetween("tanggal_transaksi", [$mulai_tanggal, $sampai_tanggal])
        ->get();

        return $result;
    }
}
