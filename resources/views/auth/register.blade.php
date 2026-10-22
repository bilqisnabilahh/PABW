
@extends('layouts.app')

@section('title', 'Daftar Petugas')

@section('content')
<section class="auth-wrap">
  <div class="auth-card">
    <div class="auth-heading">
        <p class="eyebrow">Portal petugas BPBD</p>
        <h1>Buat akun petugas</h1>
        <p>Daftarkan akun untuk mengelola laporan banjir.</p>
    </div>

    @if ($errors->any())
        <div class="form-alert" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form class="auth-form" action="{{ route('register.process') }}" method="POST">
        @csrf

        <div class="field">
            <label for="name">Nama lengkap</label>
            <input id="name" type="text" name="name" autocomplete="name" placeholder="Nama Anda"
                value="{{ old('name') }}" required>
        </div>

        <div class="field">
            <label for="email">Email</label>
            <input id="email" type="email" name="email" autocomplete="email" placeholder="nama@email.com"
                value="{{ old('email') }}" required>
        </div>

        <div class="field">
            <label for="password">Password</label>
            <input id="password" type="password" name="password" autocomplete="new-password" placeholder="Minimal 8 karakter" required>
        </div>

        <div class="field">
            <label for="password_confirmation">Konfirmasi password</label>
            <input id="password_confirmation" type="password" name="password_confirmation" autocomplete="new-password" placeholder="Ulangi password" required>
        </div>

        <button type="submit" class="submit-button">Buat akun</button>
    </form>
    <p class="auth-switch">Sudah punya akun? <a href="{{ route('login') }}">Masuk di sini</a></p>
  </div>
</section>
@endsection
