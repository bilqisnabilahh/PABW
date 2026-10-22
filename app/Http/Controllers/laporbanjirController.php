<?php

namespace App\Http\Controllers;

use App\Models\laporbanjir as Laporan;
use Illuminate\Http\Request;

class laporbanjirController extends Controller
{
    public function index()
    {
        $laporans = Laporan::all();

        return view('laporbanjir.index', compact('laporans'));
    }

    public function form()
    {
        return view('laporbanjir.form');
    }

    public function simpan(Request $request)
    {
        $data = $request->validate([
            'nama_pelapor' => ['required', 'string', 'max:255'],
            'lokasi' => ['required', 'string', 'max:255'],
            'tinggi_genangan' => ['required', 'integer', 'min:0'],
            'tanggal_kejadian' => ['required', 'date'],
        ]);

        Laporan::create($data);

        return view('laporbanjir.konfirmasi');
    }

    public function daftar($id)
    {
        $laporbanjir = Laporan::findOrFail($id);
        return response()->json($laporbanjir);
    }

    public function update(Request $request, $id)
    {
        $laporbanjir = Laporan::findOrFail($id);
        $laporbanjir->update($request->all());
        return response()->json($laporbanjir);
    }

    public function destroy($id)
    {
        $laporbanjir = Laporan::findOrFail($id);
        $laporbanjir->delete();
        return response()->json(null, 204);
    }
}
