<?php

namespace App\Http\Controllers;

use App\Models\UMKM;
use Illuminate\Http\Request;

class UMKMController extends Controller
{
    public function gg($id=null){
        return view ('/umkm',[
            'title' => 'UMKM',
            'id'=>$id,
            'nama'=>'juli'
        ]);
    }

    // if  else
    // public function gg($id=null){
    //     return $id ? UMKM::find($id) : UMKM::all();
    // }
}
