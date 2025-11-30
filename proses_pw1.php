<?php
session_start();
include 'koneksi.php';

$nim = $_POST['nim'];
$phone = $_POST['phone'];

$query = "SELECT * FROM users WHERE nim='$nim' AND phone='$phone'";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);

if (mysqli_num_rows($result) > 0) {
    $_SESSION['nim'] = $data['nim'];
    $_SESSION['role'] = $data['role'];

    if ($data['role'] == 'admin') {
        header("Location:admin/lupa1.php");
    } elseif ($data['role'] == 'pengguna') {
        header("Location:pengguna/index.php");
    } else {
        echo "Login gagal: Username atau password salah";
    }
}