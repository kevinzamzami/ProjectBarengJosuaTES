<?php
include 'konfigurasi.php';
session_start();
if (isset($_POST['submit_register'])) {
    $username = $_POST['username'];
    $nama = $_POST['nama'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    if ($password != $cpassword) {
        $_SESSION['alert'] = "Konfirmasi password tidak sesuai";
        header("location: register.php");
    } else {
        $cek_username = $conn->query("SELECT * FROM `user` WHERE `username` = '$username';");
        if (mysqli_num_rows($cek_username) == 1) {
            $_SESSION['alert'] = "Username sudah terdaftar";
            header("location: register.php");
        } else {
            $conn->query("INSERT INTO `user` (`id`, `username`, `password`, `name`, `percobaan`) VALUES (NULL, '$username', '$password', '$nama', '0');");
            $_SESSION['username'] = $username;
            $_SESSION['nama'] = $nama;
            $_SESSION['password'] = $password;
            header("location: index.php");
        }
    }
}



if (isset($_POST['submit_login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cek_login = $conn->query("SELECT * FROM `user` WHERE `username` = '$username' && `password` = '$password';");
    if (mysqli_num_rows($cek_login) == 1) {
        foreach ($cek_login as $data) {
            $_SESSION['nama'] = $data['name'];
        }
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        header("location: index.php");
    } else {
        $_SESSION['alert'] = "Username atau password salah";
        header("location: login.php");
    }
}
