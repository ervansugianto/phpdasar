<?php
require 'functions.php';

// cek apakah tombol submit sudah di tekan
if (isset($_POST["submit"])) {




    // cek apakah data berhasil di tambahkan atau tidak
    if (tambah($_POST) > 0) {
        echo "<script>
            alert('Data Berhasil Di Tambahkan');
            document.location.href = 'index.php'
        </script>";
    } else {
        echo "<script>
            alert('Data gagal di Tambahkan');
            document.location.href = 'indek.php'
        </script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>

<body>
    <h1>Tambah Data Mahasiswa</h1>

    <form action="" method="POST">
        <ul>
            <li>
                <label for="nim">Nim :</label>
                <input type="text" name="nim" id="nim" required>
            </li>
            <br>
            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <br>
            <li>
                <label for="email">Email :</label>
                <input type="text" name="email" id="email" required>
            </li>
            <br>
            <li>
                <label for="jurusan">Jurusan :</label>
                <input type="text" name="jurusan" id="jurusan" required>
            </li>
            <br>
            <li>
                <button type="submit" name="submit">Simpan</button>
            </li>
        </ul>
    </form>
</body>

</html>