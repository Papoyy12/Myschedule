<?php
session_start();
include 'koneksi.php';

$newpassword = $_POST['newpassword'];
$confirmpassword = $_POST['confirmpassword'];

$query = "SELECT * FROM users WHERE newpassword='$newpassword' AND confirmpassword='$confirmpassword'";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);

if (mysqli_num_rows($result) > 0) {
    $_SESSION['newpassword'] = $data['newpassword'];
    $_SESSION['role'] = $data['role'];

    if ($data['role'] == 'admin') {
        header("Location:admin/index.php");
    } elseif ($data['role'] == 'pengguna') {
        header("Location:pengguna/index.php");
    } else {
        echo "Login gagal: Username atau password salah";
    }
}