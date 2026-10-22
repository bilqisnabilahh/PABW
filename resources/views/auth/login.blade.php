@extends('layouts.app')

@section('title', 'Masuk Petugas')

@section('content')
<section class="auth-wrap">
  <div class="auth-card">
    <div class="auth-heading">
        <p class="eyebrow">Portal petugas BPBD</p>
        <h1>Selamat datang kembali</h1>
        <p>Masuk untuk melihat dan mengelola laporan banjir.</p>
    </div>

    @if (session('success'))
        <div class="form-alert form-alert-success" role="status">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="form-alert" role="alert">
            {{ $errors->first() }}
        </div>
    @endif

    <form class="auth-form" action="{{ route('login.process') }}" method="POST">
        @csrf

        <div class="field">
            <label for="email">Email</label>
            <input id="email" type="email" name="email" autocomplete="email" placeholder="nama@email.com"
                value="{{ old('email') }}"
                required>
        </div>

        <div class="field">
            <label for="password">Password</label>
            <input id="password" type="password" name="password" autocomplete="current-password" placeholder="Masukkan password" required>
        </div>

        <button type="submit" class="submit-button">Masuk</button>
    </form>
    <p class="auth-switch">Belum punya akun? <a href="{{ route('register') }}">Daftar sebagai petugas</a></p>
  </div>
</section>
@endsection
