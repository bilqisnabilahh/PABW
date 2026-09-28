<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Biodata</title>
</head>
<body>
    <h2>Input Biodata</h2>
    <form action="/post" method="post">
        @csrf
        <label for="name">Nama:</label>
        <input type="text" name="name" id="name" required><br><br>

        <label for="age">Umur:</label>
        <input type="number" name="age" id="age" required><br><br>

        <label for="address">Alamat:</label>
        <input type="text" name="address" id="address" required><br><br>

        <button type="submit">Submit</button>
</body>
</html>