@php
    $tinggi = $laporan->tinggi_genangan;
    [$status, $kelasStatus] = match (true) {
        $tinggi >= 100 => ['Bahaya', 'bahaya'],
        $tinggi >= 50 => ['Waspada', 'waspada'],
        default => ['Aman', 'aman'],
    };
@endphp

<article class="laporan-card">
    <h2>{{ $laporan->lokasi }}</h2>
    <p>Pelapor: {{ $laporan->nama_pelapor }}</p>
    <p>Tinggi genangan: {{ $tinggi }} cm</p>
    <p>Tanggal kejadian: {{ $laporan->tanggal_kejadian }}</p>
    <p>Status: <strong class="status-{{ $kelasStatus }}">{{ $status }}</strong></p>
</article>
