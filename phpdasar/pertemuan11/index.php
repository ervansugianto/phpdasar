<?php
// menghubungkan dengan functions
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <!-- link bootsrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body class="container">
    <h1 class="text-center">Daftar Mahasiswa</h1>
    <br>
    <a href="tambah.php" class="btn btn-primary">Tambah Data</a> <br><br>

    <table class="table table-striped">

        <tr class="text-center">
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
            <tr class="text-center">
                <td><?= $i; ?></td>
                <td>
                    <a class="btn btn-primary" href="edit.php?id=<?= $row["id"]; ?>">Edit</a>
                    ||
                    <a class="btn btn-danger" href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Yakin Ingin menghapus?')">Hapus</a>
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