<?php
// $_GET
$mahasiswa = [
    [
        "nama" => "Ervan Sugianto",
        "Nim" => "1810520026",
        "email" => "erfansucipto16@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "111.jpeg"
    ],

    [
        "nama" => "Istatik Narawanti",
        "Nim" => "1810520027",
        "email" => "istnw16@gmail.com",
        "jurusan" => "agribisnis",
        "gambar" => "111.jpeg"
    ],

    [
        "nama" => "yadi",
        "Nim" => "1810520028",
        "email" => "enggarulun16@gmail.com",
        "jurusan" => "sistem informasi",
        "gambar" => "111.jpeg"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get</title>
</head>

<body>
    <h1>Daftar mahasiswa</h1>
    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li>
                <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&Nim=<?= $mhs["Nim"] ?>&email=<?= $mhs["email"] ?>&jurusan=<?= $mhs["jurusan"] ?>"><?= $mhs["nama"]; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>