<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jadwal;
use App\Kelas;

class JadwalController extends Controller
{
    public function __construct()
    {
    	$this->middleware('notlogin');
    }

    public function index()
    {
    	$jadwal = Jadwal::orderBy('nama_kelas')->paginate(10);

    	return view('dosen.jadwal.index', compact('jadwal'));
    }

    public function create()
    {
    	return view('dosen.jadwal.create');
    }
}
