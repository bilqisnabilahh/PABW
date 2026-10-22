@extends('layouts.app')

@section('title', 'Daftar Laporan Banjir')

@section('content')
    <h1>Daftar Laporan Banjir</h1>
    <p><a href="{{ route('laporan.form') }}">Buat laporan</a></p>

    @forelse ($laporans as $laporan)
        @include('laporbanjir.laporan-card', ['laporan' => $laporan])
    @empty
        <p>Belum ada laporan banjir.</p>
    @endforelse
@endsection
