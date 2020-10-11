<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MainController extends Controller
{
    public function achievement() {

        $prestasi = DB::table("achievements")->get();

        return view('prestasiMahasiswa', compact('prestasi'));
    }

    public function pkm() {

        $pkm = DB::table("pkm")->get();

        return view('pkm', compact('pkm'));
    }
}
