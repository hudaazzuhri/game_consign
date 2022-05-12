<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Laporan;

class LaporanController extends Controller
{
    public function search(Request $req)
    {
        $res = Laporan::getSearch($req->mulai_tanggal, $req->sampai_tanggal);
        return $res;
    }

}
