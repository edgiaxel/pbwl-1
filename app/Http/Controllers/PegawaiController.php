<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawai = Pegawai::all();

        return view('hrd.pegawai_list', compact('pegawai'));
    }

    public function create()
    {
        return view('hrd.pegawai_form');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        Pegawai::create($data);

        return redirect('/pegawai');
    }
}