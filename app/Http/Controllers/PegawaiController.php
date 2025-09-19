<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;
use Illuminate\Validation\Rule;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawai = Pegawai::all();

        return view('hrd.pegawai_list', compact('pegawai'));
    }

    public function history()
    {
        $pegawaiTrashed = Pegawai::onlyTrashed()->get();

        return view('hrd.pegawai_history', compact('pegawaiTrashed'));
    }

    public function restore($id)
    {
        $pegawai = Pegawai::onlyTrashed()->find($id);
        if ($pegawai) {
            $pegawai->restore();
            return redirect('/pegawai/history')->with('success', 'Data berhasil dikembalikan!');
        }
        return redirect('/pegawai/history')->with('error', 'Data tidak ditemukan!');
    }
    public function forceDelete($id)
    {
        $pegawai = Pegawai::onlyTrashed()->find($id);
        if ($pegawai) {
            $pegawai->forceDelete();
            return redirect('/pegawai/history')->with('success', 'Data berhasil dihapus permanen!');
        }
        return redirect('/pegawai/history')->with('error', 'Data tidak ditemukan!');
    }

    public function create()
    {
        return view('hrd.pegawai_form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:255|unique:pegawai,nama_lengkap',
            'jabatan' => 'required|string|max:255',
            'email' => 'required|email|unique:pegawai,email',
            'no_hp' => 'required|string|max:20|unique:pegawai,no_hp',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string',
            'gaji' => 'required|numeric',
        ]);

        $data = $request->all();
        Pegawai::create($data);

        return redirect('/pegawai')->with('success', 'Data pegawai berhasil disimpan!');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_lengkap' => ['required', 'string', 'max:255', Rule::unique('pegawai')->ignore($id)],
            'jabatan' => 'required|string|max:255',
            'email' => ['required', 'email', Rule::unique('pegawai')->ignore($id)],
            'no_hp' => ['required', 'string', 'max:20', Rule::unique('pegawai')->ignore($id)],
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string',
            'gaji' => 'required|numeric',
        ]);

        $pegawai = Pegawai::find($id);
        $pegawai->update($request->all());

        return redirect('/pegawai')->with('success', 'Data pegawai berhasil diupdate!');
    }


    public function edit($id)
    {
        $pegawai = Pegawai::find($id);
        return view('hrd.pegawai_form', compact('pegawai'));
    }


    public function destroy($id)
    {
        $pegawai = Pegawai::find($id);
        if ($pegawai) {
            $pegawai->delete();
            return redirect('/pegawai')->with('success', 'Data pegawai berhasil dihapus!');
        }
        return redirect('/pegawai')->with('error', 'Data tidak ditemukan!');
    }

}