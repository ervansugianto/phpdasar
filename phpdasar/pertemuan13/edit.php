<?php
require 'functions.php';

// ambil data di URL
$id = $_GET["id"];

// query data mahasiswa berdasarkan idnya 
$mhs = query(" SELECT * FROM mahaiswa WHERE id = $id")[0];


// cek apakah tombol submit sudah di tekan
if (isset($_POST["submit"])) {




    // cek apakah data berhasil di ubah atau tidak
    if (edit($_POST) > 0) {
        echo "<script>
            alert('Data Berhasil Di Ubah');
            document.location.href = 'index.php'
        </script>";
    } else {
        echo "<script>
            alert('Data gagal di Ubah');
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
    <title>Ubah data</title>
</head>

<body>
    <h1>Ubah Data Mahasiswa</h1>

    <form action="" method="POST">
        <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
        <ul>
            <li>
                <label for="nim">Nim :</label>
                <input type="text" name="nim" id="nim" required value="<?= $mhs["nim"]; ?>">
            </li>
            <br>
            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama" required value="<?= $mhs["nama"]; ?>">
            </li>
            <br>
            <li>
                <label for=" email">Email :</label>
                <input type="text" name="email" id="email" required value="<?= $mhs["email"]; ?>">
            </li>
            <br>
            <li>
                <label for="jurusan">Jurusan :</label>
                <input type="text" name="jurusan" id="jurusan" required value="<?= $mhs["jurusan"]; ?>">
            </li>
            <br>
            <li>
                <button type=" submit" name="submit">Simpan</button>
            </li>
        </ul>
    </form>
</body>

</html>