@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Profil Petugas</h2>

    <p><strong>Nama:</strong> {{ Auth::user()->name }}</p>
    <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
    <p><strong>Waktu Pembuatan Akun:</strong>
        {{ Auth::user()->created_at->format('d-m-Y H:i') }}
    </p>
</div>
@endsection
