<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HashController extends Controller
{
    public function hash()
    {
        $hash_passsword_saya = Hash::make('halo123');
        echo $hash_passsword_saya;
    }
}
