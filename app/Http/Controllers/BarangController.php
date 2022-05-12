<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    public function list()
    {
        $res = Barang::getDataTable();
        return $res;
    }

    public function getData(Request $req)
    {
        $res = Barang::find($req->id);
        return $res;
    }

    public function search(Request $req)
    {
        $res = Barang::getSearch($req->keyword);
        return $res;
    }

}
