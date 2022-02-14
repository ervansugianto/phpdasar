<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");


function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $conn;
    $nama    = htmlspecialchars($data["nama"]);
    $nim     = htmlspecialchars($data["nim"]);
    $email   = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);

    // query insert data
    $query = "INSERT INTO mahasiswa VALUE
     ('','$nama','$nim','$email','$jurusan')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id=$id");

    return mysqli_affected_rows($conn);
}
function edit($data)
{
    global $conn;
    $id      = $data["id"];
    $nama    = htmlspecialchars($data["nama"]);
    $nim     = htmlspecialchars($data["nim"]);
    $email   = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);

    // query update data
    $query = "UPDATE mahasiswa SET
             nama = '$nama',
             nim  = '$nim',
             email= '$email',
             jurusan= '$jurusan'
             WHERE id = $id
             ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
function cari($keyword)
{
    $query = "SELECT * FROM mahasiswa
                WHERE 
                nama LIKE '%$keyword%' OR
                nim LIKE   '%$keyword%' 
                ";
    return query($query);
}
function registrasi($data)
{
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // cek username sudah ada atau belum?
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

    if (mysqli_fetch_assoc($result)) {
        echo "<script>alert('username sudah ada')</script>";

        return false;
    }

    // cek konfirmasi password
    if ($password !== $password2) {
        echo "<script>
            alert('konfirmasi password tidak sesuai');
        </script>";
        return false;
    }


    // enskripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan user baru ke dalam datbase
    mysqli_query($conn, "INSERT INTO user VALUES('','$username', '$password')");

    return mysqli_affected_rows($conn);
}
