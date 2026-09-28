<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pelaporan Banjir</title>
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
            color: #1f2937;
            background: linear-gradient(135deg, #e0f2fe 0%, #f0fdfa 55%, #ecfdf5 100%);
        }

        .result-card {
            width: 100%;
            max-width: 620px;
            overflow: hidden;
            border-radius: 8px;
            background: #ffffff;
            box-shadow: 0 18px 45px rgba(15, 23, 42, 0.14);
        }

        .result-header {
            padding: 28px 32px;
            color: #ffffff;
            background: linear-gradient(135deg, #0369a1 0%, #0f766e 100%);
        }

        h1 {
            margin: 0 0 10px;
            font-size: 26px;
            line-height: 1.25;
            color: #ffffff;
        }

        .subtitle {
            margin: 0;
            max-width: 480px;
            color: #dff6ff;
            font-size: 14px;
            line-height: 1.6;
        }

        .status-badge {
            display: inline-block;
            margin-bottom: 14px;
            padding: 7px 12px;
            border-radius: 999px;
            color: #075985;
            background: #e0f2fe;
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
        }

        .result-content {
            padding: 28px 32px 32px;
        }

        .result-item {
            margin: 0 0 14px;
            padding: 16px 18px;
            border-left: 4px solid #0284c7;
            border-radius: 6px;
            background: #f8fafc;
            line-height: 1.5;
        }

        .result-item strong {
            display: block;
            margin-bottom: 4px;
            color: #334155;
            font-size: 14px;
        }

        .result-value {
            color: #0f172a;
            font-size: 18px;
            font-weight: 700;
        }

        .back-link {
            display: inline-block;
            width: 100%;
            margin-top: 10px;
            padding: 13px 16px;
            border-radius: 6px;
            color: #ffffff;
            background: #0f766e;
            font-size: 15px;
            font-weight: 700;
            text-align: center;
            text-decoration: none;
            transition: background 0.2s ease, transform 0.2s ease;
        }

        .back-link:hover {
            background: #115e59;
            transform: translateY(-1px);
        }

        .back-link:active {
            transform: translateY(0);
        }

        @media (max-width: 480px) {
            body {
                padding: 16px;
            }

            .result-header,
            .result-content {
                padding: 24px;
            }

            h1 {
                font-size: 22px;
            }
        }
    </style>
</head>
<body>
    <main class="result-card">
        <section class="result-header">
            <span class="status-badge">Laporan Terkirim</span>
            <h1>Hasil Pelaporan Banjir</h1>
            <p class="subtitle">Data laporan berhasil diterima dan siap digunakan sebagai informasi kondisi banjir.</p>
        </section>

        <section class="result-content">
            <p class="result-item">
                <strong>Nama Pelapor</strong>
                <span class="result-value">{{ $namapelapor }}</span>
            </p>

            <p class="result-item">
                <strong>Lokasi</strong>
                <span class="result-value">{{ $lokasi }}</span>
            </p>

            <p class="result-item">
                <strong>Tinggi Genangan Air</strong>
                <span class="result-value">{{ $tinggigenanganair }} cm</span>
            </p>

            <a href="/" class="back-link">Kembali ke Form</a>
        </section>
    </main>
</body>
</html>
