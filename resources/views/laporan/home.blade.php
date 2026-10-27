@extends('laporan.layout')
@section('title', 'Beranda')
@section('content')
<div class="container">
    @if (session('success'))<div class="success">{{ session('success') }}</div>@endif
    <div class="box">
        <h1>Layanan Laporan Banjir</h1>
        <p>Laporkan kejadian banjir di sekitar Anda kepada BPBD Kabupaten Bandung. Isi informasi kejadian dan sertakan foto sebagai bukti.</p>
        <a class="btn" href="{{ route('laporan.create') }}">Buat Laporan</a>
    </div>
    <h2>Ringkasan Laporan</h2>
    <div class="stats">
        <div>Total laporan<strong>{{ $jumlahLaporan }}</strong></div>
        <div>Menunggu<strong>{{ $menunggu }}</strong></div>
        <div>Selesai<strong>{{ $selesai }}</strong></div>
    </div>
</div>
@endsection
