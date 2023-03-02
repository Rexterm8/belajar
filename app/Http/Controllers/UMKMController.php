<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UMKMController extends Controller
{
    public function gg($a){
        return view ('/umkm',[
            'id'=>'a',
            'nama'=>$a
        ]);
    }
    //
}
