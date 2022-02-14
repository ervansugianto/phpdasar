<?php
// $mahasiswa = [
//     ["Ervan Sugianto", "1810520026", "Teknik Informatika", "erfansucipto16@gmail.com"],
//     ["Istatik Narawanti", "1810520027", "Agribisnis", "istnw16@gmail.com"],
//     ["M.Rizpan Loksa Tarfiyadi", "1810520028", "Sistem Informasi", "enggar16@gmail.com"],
// ];

// array assoiative
// pada array ssosiative key nya adalah string yg kita buat sendiri
// devinisinya sama seperti array numerik, kecuaali key nya kita buat sendiri

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
    <title>Document</title>
</head>

<body>
    <h1>Daftar mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="IMG/<?php echo $mhs["gambar"] ?>">
            </li>
            <li>nama : <?php echo $mhs["nama"]; ?></li>
            <li>nim : <?php echo $mhs["Nim"]; ?></li>
            <li>email : <?php echo $mhs["email"]; ?></li>
            <li>jurussan : <?php echo $mhs["jurusan"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>