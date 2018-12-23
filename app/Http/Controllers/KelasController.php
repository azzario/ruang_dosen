<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kelas;

class KelasController extends Controller
{
	public function __construct() {
        $this->middleware('notlogin');
    }

    public function index()
    {
    	$kelas = Kelas::orderBy('nama_kelas')->paginate(10);
    	
    	return view('dosen.kelas.index', compact('kelas'));
    }
}
