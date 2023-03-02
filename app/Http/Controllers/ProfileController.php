<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function index()
    {
        return view('profile', [
            "id" => 1,
            "nama" => 'Julianto',
            "nim" => 2440056820
        ]);

    }
}
