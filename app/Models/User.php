<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class User extends Model 
{
    use HasFactory;

    protected $table = "users";
    protected $fillable = [
        "fullname",
        "username",
        "password",
    ];
}
