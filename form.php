<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uji Coba Formulir</title>
    <link rel="stylesheet" href="tugas2.css">
</head>
<body>
    <div class="form-container">
    <form action="proses.php" method="POST">
        <h3 align="center">Data Diri</h3>
        <label for="NAMA"> Nama : </label>
        <input type="text" id="Nama" name="name" class="form-input"><br>
        <label for="EMAIL"> Email : </label>
        <input type="email" id="email" name="email" class="form-input"><br>
        <label for="NIM"> NIM : </label>
        <input type="number" id="NIM" name="NIM" class="form-input">
        <br>
        <input type="submit" value="Kirim" class="form-submit">
    </form>
    </div>
</body>
</html>