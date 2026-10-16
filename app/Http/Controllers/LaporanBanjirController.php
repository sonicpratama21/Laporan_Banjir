<?php

namespace App\Http\Controllers;

use App\Models\LaporanBanjir;
use Illuminate\Http\Request;

class LaporanBanjirController extends Controller
{
    public function index()
    {
        $data = LaporanBanjir::latest()->get();

        return view('laporan.index', compact('data'));
    }

    public function create()
    {
        return view('laporan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pelapor' => 'required',
            'lokasi'       => 'required',
            'tinggi_air'   => 'required|integer',
        ]);

        LaporanBanjir::create($request->only([
            'nama_pelapor',
            'lokasi',
            'tinggi_air',
        ]));

        return redirect('/laporan')->with('success', 'Terkirim');
    }

    public function edit($id)
    {
        $laporan = LaporanBanjir::findOrFail($id);

        return view('laporan.edit', compact('laporan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_pelapor' => 'required',
            'lokasi'       => 'required',
            'tinggi_air'   => 'required|integer',
        ]);

        $laporan = LaporanBanjir::findOrFail($id);

        $laporan->update($request->only([
            'nama_pelapor',
            'lokasi',
            'tinggi_air',
        ]));

        return redirect('/laporan')->with('success', 'Diubah');
    }

    public function destroy($id)
    {
        LaporanBanjir::findOrFail($id)->delete();

        return redirect('/laporan')->with('success', 'Dihapus');
    }
}
