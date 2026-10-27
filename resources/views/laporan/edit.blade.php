@extends('laporan.layout')
@section('title', 'Ubah Laporan')
@section('content')
<div class="container"><h1>Edit Laporan #{{ $laporan->id }}</h1><p>Ubah data dan status penanganan.</p>
@if ($errors->any())<div class="notice">Periksa kembali isian yang ditandai di bawah.</div>@endif
<form class="box" method="POST" action="{{ route('petugas.laporan.update', $laporan) }}" enctype="multipart/form-data">@csrf @method('PUT')
    @include('laporan.form-fields', ['isEdit' => true])
    <a class="btn gray" href="{{ route('petugas.laporan.show', $laporan) }}">Batal</a> <button class="btn" type="submit">Simpan</button>
</form></div>
@endsection
