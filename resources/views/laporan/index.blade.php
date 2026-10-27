@extends('laporan.layout')
@section('title', 'Data Laporan')
@section('content')
<div class="container">
    <h1>Data Laporan Banjir</h1>
    @if (session('success'))<div class="success">{{ session('success') }}</div>@endif
    <p>Total: {{ $jumlahLaporan }} laporan | Menunggu: {{ $menunggu }} | Diproses: {{ $diproses }} | Selesai: {{ $selesai }}</p>
    <div class="box table-wrap"><table>
        <thead><tr><th>Foto</th><th>Nama Pelapor</th><th>Lokasi</th><th>Tinggi Air</th><th>Status</th><th>Aksi</th></tr></thead>
        <tbody>
        @forelse ($laporans as $laporan)
            <tr>
                <td><img class="thumb" src="{{ url('storage/'.$laporan->foto) }}" alt="Foto banjir"></td>
                <td>{{ $laporan->nama_pelapor }}<br>{{ $laporan->no_hp }}</td>
                <td>{{ $laporan->lokasi }}<br>Kecamatan {{ $laporan->kecamatan }}</td>
                <td>{{ $laporan->tinggi_air }} cm</td><td>{{ $laporan->status }}</td>
                <td class="actions"><a class="btn small" href="{{ route('petugas.laporan.show', $laporan) }}">Detail</a> <a class="btn gray small" href="{{ route('petugas.laporan.edit', $laporan) }}">Edit</a>
                    <form class="inline" method="POST" action="{{ route('petugas.laporan.destroy', $laporan) }}" onsubmit="return confirm('Hapus laporan ini?')">@csrf @method('DELETE')<button class="btn red small" type="submit">Hapus</button></form>
                </td>
            </tr>
        @empty<tr><td colspan="6">Belum ada laporan.</td></tr>@endforelse
        </tbody>
    </table></div>
    {{ $laporans->links() }}
</div>
@endsection
