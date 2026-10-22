<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laporan Terkirim</title>
</head>
<body>
    <main>
        <x-alert type="success" message="Laporan banjir berhasil disimpan." />
        <a href="{{ route('laporan.form') }}">Kirim laporan lain</a>
    </main>
</body>
</html>
