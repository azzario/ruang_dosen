<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DosenPagesController extends Controller
{
    public function __construct() {
        $this->middleware('guest', ['only' => 'getLogin']);
        $this->middleware('notlogin', ['only' => 'getIndex', 'getProfile', 'doLogout']);
    }

    private $roles = [
        'nidn' => 'required',
        'password' => 'required'
    ];

    private $customMessages = [
        'nidn.required' => 'NIDN tidak boleh kosong',
        'password.required' => 'Password tidak boleh kosong'
    ];

    public function getIndex()
    {
    	return view('dosen.pages.index');
    }

    public function getProfile()
    {
    	return view('dosen.pages.profile');
    }

    public function getLogin()
    {
    	return view('dosen.pages.login');
    }

    public function dologin(Request $request)
    {
        //validate
        $this->validate($request, $this->roles, $this->customMessages);

        //login process
        if(Auth::attempt(['nidn' => $request->nidn, 'password' => $request->password])) {
            return redirect('/');
        }
        return redirect()->back();
    }

    public function doLogout()
    {
        Auth::logout();

        return redirect('/login/dosen');
    }
}
