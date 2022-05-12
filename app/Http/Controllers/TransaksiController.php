<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Transaksi;

class TransaksiController extends Controller
{
    public function list(Request $req)
    {
        $res = Transaksi::getDataTable($req->id_user);
        return $res;
    }

    public function getData(Request $req)
    {
        $res = Transaksi::getData($req->id);
        return $res;
    }

}
