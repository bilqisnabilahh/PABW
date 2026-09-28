<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lapor Fasilitas</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 24px;
            font-family: Arial, sans-serif;
            color: #1e293b;
            background: linear-gradient(135deg, #dbeafe 0%, #ffffff 48%, #fef3c7 100%);
        }

        .result-card {
            width: 100%;
            max-width: 680px;
            overflow: hidden;
            border-radius: 8px;
            background: #ffffff;
            box-shadow: 0 18px 45px rgba(30, 64, 175, 0.16);
        }

        .result-header {
            padding: 28px 32px;
            color: #ffffff;
            background: linear-gradient(135deg, #1d4ed8 0%, #2563eb 68%, #facc15 68%, #facc15 100%);
        }

        .status-badge {
            display: inline-block;
            margin-bottom: 14px;
            padding: 7px 12px;
            border-radius: 999px;
            color: #1e3a8a;
            background: #fef3c7;
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
        }

        h2 {
            margin: 0 0 10px;
            color: #ffffff;
            font-size: 28px;
            line-height: 1.25;
        }

        .subtitle {
            margin: 0;
            max-width: 480px;
            color: #dbeafe;
            font-size: 14px;
            line-height: 1.6;
        }

        .result-content {
            padding: 30px 32px 32px;
        }

        .result-item {
            margin: 0 0 14px;
            padding: 16px 18px;
            border: 1px solid #dbeafe;
            border-left: 5px solid #facc15;
            border-radius: 6px;
            background: #f8fafc;
            line-height: 1.5;
        }

        .result-item strong {
            display: block;
            margin-bottom: 5px;
            color: #1d4ed8;
            font-size: 14px;
        }

        .result-value {
            color: #0f172a;
            font-size: 17px;
            font-weight: 700;
            overflow-wrap: anywhere;
        }

        .back-link {
            display: inline-block;
            width: 100%;
            margin-top: 10px;
            padding: 13px 16px;
            border-radius: 6px;
            color: #ffffff;
            background: #1d4ed8;
            font-size: 15px;
            font-weight: 700;
            text-align: center;
            text-decoration: none;
            transition: background 0.2s ease, transform 0.2s ease;
        }

        .back-link:hover {
            background: #1e40af;
            transform: translateY(-1px);
        }

        .back-link:active {
            transform: translateY(0);
        }

        @media (max-width: 520px) {
            body {
                padding: 16px;
            }

            .result-header,
            .result-content {
                padding: 24px;
            }

            h2 {
                font-size: 24px;
            }
        }
    </style>
</head>
<body>
    <main class="result-card">
        <section class="result-header">
            <span class="status-badge">Laporan Diterima</span>
            <h2>Hasil Laporan Fasilitas</h2>
            <p class="subtitle">Detail laporan fasilitas berhasil dikirim dan siap untuk diperiksa.</p>
        </section>

        <section class="result-content">
            <p class="result-item">
                <strong>Judul Laporan</strong>
                <span class="result-value">{{ $judullaporan }}</span>
            </p>
            <p class="result-item">
                <strong>Lokasi</strong>
                <span class="result-value">{{ $lokasi }}</span>
            </p>
            <p class="result-item">
                <strong>Deskripsi</strong>
                <span class="result-value">{{ $deskripsi }}</span>
            </p>
            <p class="result-item">
                <strong>Tanggal Kejadian</strong>
                <span class="result-value">{{ $tanggalkejadian }}</span>
            </p>
            <p class="result-item">
                <strong>Bukti Foto</strong>
                <span class="result-value">{{ $buktifoto->getClientOriginalName() }}</span>
            </p>

            <a href="/form/fasilitas" class="back-link">Kembali ke Form</a>
        </section>
    </main>
</body>
</html>
