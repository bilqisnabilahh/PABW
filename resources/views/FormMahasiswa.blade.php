<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Mahasiswa</title>
</head>
<body>
    <form action="/post" method="post">
        @csrf
        <label for="nim">NIM:</label>
        <input type="text" id="nim" name="nim" required><br><br>

        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="prodi">Prodi:</label>
        <input type="text" id="prodi" name="prodi" required><br><br>

        <label for="semester">Semester:</label>
        <input type="text" id="semester" name="semester" required><br><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>