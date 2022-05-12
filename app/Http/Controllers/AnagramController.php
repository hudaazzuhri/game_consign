<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class AnagramController extends Controller
{
    public function result()
    {
        $array = ['kita', 'atik', 'tika', 'aku', 'kia', 'makan', 'kua'];
        $array_search = ['kita', 'atik', 'tika', 'aku', 'kia', 'makan', 'kua'];
        $return = [];
        foreach ($array as $value) {
            $sub = [];
            foreach ($array_search as $search) {
                if (count_chars($value, 1) == count_chars($search, 1)){
                    $sub[] = $search;
                    array_diff( $array, [$search] );
                }
            }
            $return[] = $sub;
        }

        return array_filter($return);
    }

}
