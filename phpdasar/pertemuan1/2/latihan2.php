<?php
// pertemuan 2 php dasar
// sintak php

// setandart output
// echo, print
// print_r
// var_domp

// echo "ERVAN SUGIANTO";
//echoadalah sintak untuk mengeprint suatu perintah

// penulisan sintak php
// 1. php di dalam html
// 2. html di dalam php

// variabel dan tipe data dalam php
// variabel
$nama   = "Ervan sugianto";

// echo "nama saya $nama";
// aturan penulian variabel di dalam di php adalah tidak boleh di awali dengan angka , tapi boleh menggunakan angka

// operator di dalam php
// aritmatika
// $x  = 10;
// $y  = 20;
// echo $x * $y;

// operator penggabung string

$nama_depan = "Ervan";
$nama_belakang  = " Sugianto";
echo $nama_depan . " " . $nama_belakang;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>belajar php</title>
</head>

<body>
    <!-- php echo di dalam tag h1 untuk menggambil variabel yg sudah kita buat di dalam php -->
    <h1>selamat datang <?php echo "$nama" ?></h1>
    <p><?php echo "INI ADALAH PERAGRAF" ?></p>
</body>

</html>