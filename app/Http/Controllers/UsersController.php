<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function list()
    {
        $res = User::getDataTable();
        return $res;
    }

    public function getData(Request $req)
    {
        $res = User::find($req->id);
        return $res;
    }

    public function doLogin(Request $req)
    {
        $username = $req->username;
        $password = $req->password;

        $user = User::where('username', $username)->first();
        if(!empty($user) && $user->password == $password){
            return json_encode(['status' => 'success', 'data' => $user]);
        } else {
            return json_encode(['status' => 'error']);
        }
    }

}
