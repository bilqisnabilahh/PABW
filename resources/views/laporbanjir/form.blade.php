@extends('layouts.app')

@section('title', 'Form Pelaporan Banjir')

@section('content')
    <section class="form-wrap" aria-labelledby="form-title">
        <p class="eyebrow">Layanan laporan warga</p>
        <h1 class="page-title" id="form-title">Laporkan kejadian banjir</h1>
        <p class="page-description">Isi informasi berikut agar kondisi genangan di wilayah Anda dapat segera diketahui.</p>

        <form class="form-card" action="{{ route('laporan.simpan') }}" method="POST">
            @csrf
            <div class="form-grid">
                <div class="field field-full">
                    <label class="field-label" for="nama_pelapor">Nama pelapor <span aria-hidden="true">*</span></label>
                    <input class="field-input @error('nama_pelapor') is-invalid @enderror" id="nama_pelapor" type="text" name="nama_pelapor" value="{{ old('nama_pelapor') }}" placeholder="Contoh: Budi Santoso" autocomplete="name" maxlength="255" required @error('nama_pelapor') aria-invalid="true" aria-describedby="nama-pelapor-error" @enderror>
                    @error('nama_pelapor') <p class="error-message" id="nama-pelapor-error">{{ $message }}</p> @enderror
                </div>

                <div class="field field-full">
                    <label class="field-label" for="lokasi">Kecamatan / lokasi kejadian <span aria-hidden="true">*</span></label>
                    <input class="field-input @error('lokasi') is-invalid @enderror" id="lokasi" type="text" name="lokasi" value="{{ old('lokasi') }}" placeholder="Contoh: Dayeuhkolot" autocomplete="address-level2" maxlength="255" required @error('lokasi') aria-invalid="true" aria-describedby="lokasi-error" @enderror>
                    @error('lokasi') <p class="error-message" id="lokasi-error">{{ $message }}</p> @enderror
                </div>

                <div class="field">
                    <label class="field-label" for="tinggi_genangan">Tinggi genangan <span aria-hidden="true">*</span></label>
                    <input class="field-input @error('tinggi_genangan') is-invalid @enderror" id="tinggi_genangan" type="number" name="tinggi_genangan" min="0" max="10000" step="1" value="{{ old('tinggi_genangan') }}" placeholder="Misalnya 75" inputmode="numeric" required @error('tinggi_genangan') aria-invalid="true" aria-describedby="tinggi-hint tinggi-error" @enderror>
                    <p class="field-hint" id="tinggi-hint">Masukkan angka dalam sentimeter (cm).</p>
                    @error('tinggi_genangan') <p class="error-message" id="tinggi-error">{{ $message }}</p> @enderror
                </div>

                <div class="field">
                    <label class="field-label" for="tanggal_kejadian">Tanggal kejadian <span aria-hidden="true">*</span></label>
                    <input class="field-input @error('tanggal_kejadian') is-invalid @enderror" id="tanggal_kejadian" type="date" name="tanggal_kejadian" value="{{ old('tanggal_kejadian') }}" required @error('tanggal_kejadian') aria-invalid="true" aria-describedby="tanggal-error" @enderror>
                    @error('tanggal_kejadian') <p class="error-message" id="tanggal-error">{{ $message }}</p> @enderror
                </div>
            </div>

            <div class="form-footer">
                <p class="required-note">* Wajib diisi</p>
                <button class="submit-button" type="submit">
                    Kirim laporan <span aria-hidden="true">→</span>
                </button>
            </div>
        </form>
    </section>
@endsection