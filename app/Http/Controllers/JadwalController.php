<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Jadwal;
use App\Kelas;
use App\MatkulDosen;

class JadwalController extends Controller
{
    public function __construct()
    {
    	$this->middleware('notlogin');
    }

    private $roles = [
        'id_kelas' => 'required',
        'label' => 'required|max:100',
        'sks' => 'required|numeric|digits:1',
        'hari' => 'required',
        'jam_mulai' => 'required|date_format:H:i',
        'id_matkul' => 'required'
    ];

    private $customMessages = [
        'id_kelas.required' => 'Kelas harus diisi',
        'label.required' => 'Label harus diisi',
        'label.max' => 'Label tidak boleh lebih dari :max huruf',
        'sks.required' => 'Sks harus diisi',
        'sks.numeric' => 'Sks harus diisi angka',
        'sks.digits' => 'Sks tidak boleh lebih dari :digits angka',
        'hari.required' => 'Hari harus diisi',
        'jam_mulai.required' => 'Jam harus diisi',
        'jam_mulai.date_format' => 'Format jam harus \'jam:menit\'',
        'id_matkul.required' => 'Mata kuliah harus diisi',
    ];

    public function index()
    {
    	$jadwal = Jadwal::orderBy('created_at', 'DESC')->paginate(10);

    	return view('dosen.jadwal.index', compact('jadwal'));
    }

    public function create()
    {
        $kelas = Kelas::orderBy('nama_kelas')->get();
        $matkul_dosen = MatkulDosen::whereHas('matkul', function($query) {
            $query->where('matkul_dosen.id_dosen', '=', Auth::user()->id)->orderBy('nama_matkul');
        })->get();
    	
        return view('dosen.jadwal.create', compact('kelas', 'matkul_dosen'));
    }

    public function store(Request $request)
    {
        //request
        $req = $request->all();
        $req['id_dosen'] = Auth::user()->id;
        //validate
        $this->validate($request, $this->roles, $this->customMessages);

        //save to db
        $jadwal = Jadwal::create($req);
        if($jadwal) {
            return redirect('/jadwal/dosen')->with('success', 'Jadwal berhasil ditambah');
        }
        return redirect()->back();
    }

    public function edit(Jadwal $jadwal)
    {
        $kelas = Kelas::orderBy('nama_kelas')->get();
        $matkul_dosen = MatkulDosen::whereHas('matkul', function($query) {
            $query->where('matkul_dosen.id_dosen', '=', Auth::user()->id)->orderBy('nama_matkul');
        })->get();

        return view('dosen.jadwal.edit', compact('jadwal', 'kelas', 'matkul_dosen'));
    }

    public function update($jadwal, Request $request)
    {
        
    }
}
