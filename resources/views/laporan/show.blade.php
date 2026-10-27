@extends('laporan.layout')
@section('title', 'Detail Laporan')
@section('content')
<div class="container">
    <h1>Detail Laporan #{{ $laporan->id }}</h1>
    @if (session('success'))<div class="success">{{ session('success') }}</div>@endif
    <div class="box">
        <p><strong>Nama pelapor:</strong> {{ $laporan->nama_pelapor }}</p>
        <p><strong>Nomor HP:</strong> {{ $laporan->no_hp }}</p>
        <p><strong>Kecamatan:</strong> {{ $laporan->kecamatan }}</p>
        <p><strong>Lokasi:</strong> {{ $laporan->lokasi }}</p>
        <p><strong>Tinggi air:</strong> {{ $laporan->tinggi_air }} cm</p>
        <p><strong>Status:</strong> {{ $laporan->status }}</p>
        <p><strong>Keterangan:</strong> {{ $laporan->keterangan }}</p>
        <p><strong>Tanggal laporan:</strong> {{ $laporan->created_at->format('d/m/Y H:i') }}</p>
        <p><strong>Foto bukti:</strong></p>
        <img class="large" src="{{ url('storage/'.$laporan->foto) }}" alt="Foto bukti banjir">
        <p><a class="btn gray" href="{{ route('petugas.laporan.index') }}">Kembali</a> <a class="btn" href="{{ route('petugas.laporan.edit', $laporan) }}">Edit</a></p>
    </div>
</div>
@endsection
