<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class LaporanController extends Controller
{
    private const STATUSES = ['Menunggu', 'Diproses', 'Selesai'];

    public function landing(): View
    {
        return view('laporan.home', [
            'jumlahLaporan' => Laporan::count(),
            'selesai' => Laporan::where('status', 'Selesai')->count(),
            'menunggu' => Laporan::where('status', 'Menunggu')->count(),
        ]);
    }

    public function index(): View
    {
        return view('laporan.index', [
            'laporans' => Laporan::latest()->paginate(10),
            'jumlahLaporan' => Laporan::count(),
            'menunggu' => Laporan::where('status', 'Menunggu')->count(),
            'diproses' => Laporan::where('status', 'Diproses')->count(),
            'selesai' => Laporan::where('status', 'Selesai')->count(),
        ]);
    }

    public function create(): View
    {
        return view('laporan.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate($this->rules(true));
        $validated['foto'] = $request->file('foto')->store('laporan', 'public');
        $validated['status'] = 'Menunggu';
        Laporan::create($validated);

        return redirect()->route('home')->with('success', 'Laporan banjir berhasil dikirim. Terima kasih atas informasinya.');
    }

    public function show(Laporan $laporan): View
    {
        return view('laporan.show', compact('laporan'));
    }

    public function edit(Laporan $laporan): View
    {
        return view('laporan.edit', ['laporan' => $laporan, 'statuses' => self::STATUSES]);
    }

    public function update(Request $request, Laporan $laporan): RedirectResponse
    {
        $validated = $request->validate($this->rules(false));

        if ($request->hasFile('foto')) {
            $newPhoto = $request->file('foto')->store('laporan', 'public');
            Storage::disk('public')->delete($laporan->foto);
            $validated['foto'] = $newPhoto;
        }

        $laporan->update($validated);

        return redirect()->route('petugas.laporan.show', $laporan)->with('success', 'Laporan berhasil diperbarui.');
    }

    public function destroy(Laporan $laporan): RedirectResponse
    {
        Storage::disk('public')->delete($laporan->foto);
        $laporan->delete();

        return redirect()->route('petugas.laporan.index')->with('success', 'Laporan berhasil dihapus.');
    }

    private function rules(bool $photoRequired): array
    {
        return [
            'nama_pelapor' => ['required', 'string', 'max:120'],
            'no_hp' => ['required', 'string', 'max:30'],
            'lokasi' => ['required', 'string', 'max:255'],
            'kecamatan' => ['required', 'string', 'max:100'],
            'tinggi_air' => ['required', 'integer', 'min:1', 'max:65535'],
            'keterangan' => ['required', 'string', 'max:3000'],
            'foto' => [$photoRequired ? 'required' : 'nullable', 'image', 'mimes:jpg,jpeg,png', 'max:2048'],
            'status' => [$photoRequired ? 'prohibited' : 'required', 'in:Menunggu,Diproses,Selesai'],
        ];
    }
}
