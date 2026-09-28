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
            background: linear-gradient(135deg, #fef3c7 0%, #ffffff 48%, #dbeafe 100%);
        }

        .form-card {
            width: 100%;
            max-width: 560px;
            padding: 32px;
            border-top: 8px solid #facc15;
            border-radius: 8px;
            background: #ffffff;
            box-shadow: 0 18px 45px rgba(30, 64, 175, 0.16);
        }

        h2 {
            margin: 0 0 8px;
            color: #1d4ed8;
            font-size: 28px;
            line-height: 1.25;
        }

        .subtitle {
            margin: 0 0 26px;
            color: #64748b;
            font-size: 14px;
            line-height: 1.6;
        }

        .form-group {
            margin-bottom: 18px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #334155;
            font-size: 14px;
            font-weight: 700;
        }

        input,
        textarea {
            width: 100%;
            padding: 12px 14px;
            border: 1px solid #bfdbfe;
            border-radius: 6px;
            color: #0f172a;
            background: #f8fafc;
            font-family: Arial, sans-serif;
            font-size: 15px;
            transition: border-color 0.2s ease, box-shadow 0.2s ease, background 0.2s ease;
        }

        textarea {
            min-height: 110px;
            resize: vertical;
        }

        input:focus,
        textarea:focus {
            outline: none;
            border-color: #2563eb;
            background: #ffffff;
            box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.14);
        }

        input[type="file"] {
            padding: 10px;
            background: #ffffff;
        }

        button {
            width: 100%;
            margin-top: 8px;
            padding: 13px 16px;
            border: 0;
            border-radius: 6px;
            color: #1e3a8a;
            background: #facc15;
            font-size: 15px;
            font-weight: 700;
            cursor: pointer;
            transition: background 0.2s ease, transform 0.2s ease, box-shadow 0.2s ease;
        }

        button:hover {
            background: #eab308;
            box-shadow: 0 10px 20px rgba(234, 179, 8, 0.22);
            transform: translateY(-1px);
        }

        button:active {
            transform: translateY(0);
        }

        @media (max-width: 520px) {
            body {
                padding: 16px;
            }

            .form-card {
                padding: 24px;
            }

            h2 {
                font-size: 24px;
            }
        }
    </style>
</head>
<body>
    <main class="form-card">
        <h2>Lapor Fasilitas</h2>
        <p class="subtitle">Isi laporan fasilitas dengan jelas agar perbaikan bisa ditindaklanjuti.</p>

        <form action="/lapor-fasilitas/proses" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="judullaporan">Judul Laporan</label>
                <input type="text" name="judullaporan" id="judullaporan" required>
            </div>
            <div class="form-group">
                <label for="lokasi">Lokasi</label>
                <input type="text" name="lokasi" id="lokasi" required>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" required></textarea>
            </div>
            <div class="form-group">
                <label for="tanggalkejadian">Tanggal Kejadian</label>
                <input type="date" name="tanggalkejadian" id="tanggalkejadian" required>
            </div>
            <div class="form-group">
                <label for="buktifoto">Bukti Foto</label>
                <input type="file" name="buktifoto" id="buktifoto" required>
            </div>
            <button type="submit">Kirim Laporan</button>
        </form>
    </main>
</body>
</html>
