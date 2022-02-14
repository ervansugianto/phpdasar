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
    <!-- link bootsrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body class="container">
    <h2 class="text-center">Tambah Data Mahasiswa</h2>
    <br>
    <form action="" method="POST">
        <ul>
            <div class="mb-3">
                <label for="nim" class="form-label">Nim</label>
                <input type="text" name="nim" class="form-control" id="nim">
            </div>
            <br>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" id="nama">
            </div>
            <br>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" name="email" class="form-control" id="email">
            </div>
            <br>
            <div class="mb-3">
                <label for="jurusan" class="form-label">Jurusan</label>
                <input type="text" name="jurusan" class="form-control" id="jurusan">
            </div>
            <br>

            <button type="submit" name="submit" class="btn btn-primary">Submit</button>

        </ul>
    </form>
</body>

</html>