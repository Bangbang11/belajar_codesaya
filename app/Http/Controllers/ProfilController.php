<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index() {
    	$nama = "Bangbang";
    	$umur = 25;
    	return view('profil')->with(['nama'=>$nama,
    		'umur'=>$umur]);
    }
}
