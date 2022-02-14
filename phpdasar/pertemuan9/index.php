<?php
// menghubungkan dengan functions
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

// ambil data dari objek result
// mysqli_fetch_objeck() untuk mengambalikan array numerik
// mysqli_fetch_assoc() untuk mengambalikan array associative
// mysqli_fetch_array() untuk mengembalikan keduanya 
// mysqli_fetch_object() 

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Aksi</th>
            <th>Nim</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
        <?php $i = 1; ?>
        <?php
        foreach ($mahasiswa as $row) :
        ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="">Ubah</a>
                    <a href="">Hapus</a>
                </td>
                <td><?= $row["nim"]; ?></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["email"]; ?></td>
                <td><?= $row["jurusan"]; ?></td>
            </tr>
            <?php $i++ ?>
        <?php endforeach; ?>
    </table>
</body>

</html>