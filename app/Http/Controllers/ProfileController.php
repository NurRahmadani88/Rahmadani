<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function beritaksi(){

        return view('beritaksi');
    }

    public function lulusan(){
        return view('lulusan');
    }

    public function dosen(){
        return view('dosen');
    }
}
