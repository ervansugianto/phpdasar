<?php
$mahasiswa = [

    ["Ervan Sugianto", "1810520026", "Teknik Informatika", "erfansucipto16@gmail.com"],
    ["Istatik Narawanti", "1810520027", "agribisnis", "erfansucipto16@gmail.com"],
    ["Yadi", "1810520028", "sistem informasi", "erfansucipto16@gmail.com"],

];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>nama: <?php echo $mhs[0]; ?></li>
            <li>nim: <?php echo $mhs[1]; ?></li>
            <li>jurusan: <?php echo $mhs[2]; ?></li>
            <li>email: <?php echo $mhs[3]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>