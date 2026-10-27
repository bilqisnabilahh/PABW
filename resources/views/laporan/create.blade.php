@extends('laporan.layout')
@section('title', 'Buat Laporan')
@section('content')
<div class="container"><h1>Form Laporan Banjir</h1><p>Isi data kejadian dengan lengkap.</p>
@if ($errors->any())<div class="notice">Periksa kembali isian yang ditandai di bawah.</div>@endif
<form class="box" method="POST" action="{{ route('laporan.store') }}" enctype="multipart/form-data">@csrf
    @include('laporan.form-fields', ['isEdit' => false])
    <a class="btn gray" href="{{ route('home') }}">Batal</a> <button class="btn" type="submit">Kirim laporan</button>
</form></div>
@endsection
