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
            background: linear-gradient(135deg, #dff6ff 0%, #f7fbff 52%, #d8f3dc 100%);
        }

        .form-card {
            width: 100%;
            max-width: 460px;
            padding: 32px;
            border-radius: 8px;
            background: #ffffff;
            box-shadow: 0 18px 45px rgba(15, 23, 42, 0.14);
        }

        h1 {
            margin: 0 0 8px;
            font-size: 26px;
            line-height: 1.25;
            color: #0f172a;
        }

        .subtitle {
            margin: 0 0 28px;
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
            font-weight: 700;
            font-size: 14px;
            color: #334155;
        }

        input {
            width: 100%;
            padding: 12px 14px;
            border: 1px solid #cbd5e1;
            border-radius: 6px;
            font-size: 15px;
            color: #0f172a;
            background: #f8fafc;
            transition: border-color 0.2s ease, box-shadow 0.2s ease, background 0.2s ease;
        }

        input:focus {
            outline: none;
            border-color: #0284c7;
            background: #ffffff;
            box-shadow: 0 0 0 4px rgba(2, 132, 199, 0.14);
        }

        button {
            width: 100%;
            margin-top: 6px;
            padding: 13px 16px;
            border: 0;
            border-radius: 6px;
            font-size: 15px;
            font-weight: 700;
            color: #ffffff;
            background: #0284c7;
            cursor: pointer;
            transition: background 0.2s ease, transform 0.2s ease;
        }

        button:hover {
            background: #0369a1;
            transform: translateY(-1px);
        }

        button:active {
            transform: translateY(0);
        }

        @media (max-width: 480px) {
            body {
                padding: 16px;
            }

            .form-card {
                padding: 24px;
            }

            h1 {
                font-size: 22px;
            }
        }
    </style>
</head>
<body>
    <main class="form-card">
        <h1>Data Pelaporan Banjir</h1>
        <p class="subtitle">Isi data laporan banjir dengan lengkap agar informasi mudah diproses.</p>

        <form action="/post" method="post">
            @csrf
            <div class="form-group">
                <label for="namapelapor">Nama Pelapor</label>
                <input type="text" id="namapelapor" name="namapelapor" required>
            </div>

            <div class="form-group">
                <label for="lokasi">Lokasi</label>
                <input type="text" id="lokasi" name="lokasi" required>
            </div>

            <div class="form-group">
                <label for="tinggigenanganair">Tinggi Genangan Air (cm)</label>
                <input type="number" id="tinggigenanganair" name="tinggigenanganair" required>
            </div>

            <button type="submit">Submit</button>
        </form>
    </main>
</body>
</html>
