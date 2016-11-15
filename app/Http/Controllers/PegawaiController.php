<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pendaftar;

class PegawaiController extends Controller
{
     public function index()
    {
    	$pendaftar = Pendaftar::paginate(10);
        return view('halaman/datapendaftar')->with('pendaftar', $pendaftar);
    }
}
