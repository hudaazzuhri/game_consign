<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Barang extends Model 
{
    use HasFactory;

    protected $table = "barang";
    protected $fillable = [
        "kode_barang",
        "nama_barang",
        "satuan",
        "harga_satuan",
    ];

    static function getDataTable() 
    {
        $result = Barang::orderBy("kode_barang", "asc")
        ->get();

        return $result;
    }

    static function getData($id)
    {
        $result = Barang::find($id);

        return $result;
    }

    static function getSearch($keyword)
    {
        $result = Barang::where("kode_barang", "like", "%".$keyword."%")
        ->orWhere("nama_barang", "like", "%".$keyword."%")
        ->get();

        return $result;
    }
}
