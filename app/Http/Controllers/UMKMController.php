<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UMKMController extends Controller
{
    public function a($a){
        return view ('/umkm',[
            'id'=>'a',
            'nama'=>$a
        ]);
    }
    //
}
