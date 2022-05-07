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

if (isset($_POST['submit_pesanan'])) {
    $harga_1 = 0;
    $harga_2 = 500000;
    $harga_3 = 900000;

    $nama = $_SESSION['nama'];
    $durasi = $_POST['durasi'];
    $jenis = $_POST['jenis'];
    $random = (rand(1000000, 9999999));
    $upload = 0;
    $date_reference = date("Y-m-d");
    $date = date_create($date_reference);
    $date_jatuh = date_add($date, date_interval_create_from_date_string("1 day"));
    $date_jatuh = date_add($date, date_interval_create_from_date_string($durasi . " month"));


    if ($jenis == 1) {
        $cek = $conn->query("SELECT * FROM `user` WHERE `username` = '$nama' && `percobaan` = 1;");
        if (mysqli_num_rows($cek) == 1) {
            $_SESSION['alert'] = "Paket ini hanya boleh dipesan 1 kali saja";
            header("location: pemesananlayanan.php?jenis=$jenis");
        } else {
            while ($upload == 0) {
                $cek = $conn->query("SELECT * FROM `langganan` WHERE `kode_pembayaran` = $random;");
                if (mysqli_num_rows($cek) >= 1) {
                    $random = $random + 1;
                    //echo $random;
                } else {
                    $date = $date->format('Y-m-d');
                    $date_jatuh = $date_jatuh->format('Y-m-d');
                    //echo $date_jatuh;
                    $harga_1 = $harga_1 * $durasi;
                    $conn->query("INSERT INTO `langganan` (`id`, `kode_pembayaran`, `atas_nama`, `layanan_perawatan`, `tanggal_pemesanan`, `tanggal_habis_tempo`, `total_pembayaran`, `status`) VALUES (NULL, '$random', '$nama', '$jenis', '$date_reference', '$date_jatuh', $harga_1, 'menunggu konfirmasi');");
                    $upload = 1;
                    echo "selesai";
                    $_SESSION['alert'] = "Paket telah berhasil didaftarkan. Silahkan menunggu konfirmasi";


                    $_SESSION['nomor'] = $random;
                    $_SESSION['tanggal'] = $date_reference;
                    $_SESSION['layanan'] = "Percobaan Pertama";
                    $_SESSION['durasi'] = $date_reference . " hingga " . $date_jatuh;
                    $_SESSION['total'] = $harga_1;
                    $_SESSION['bulan'] = $durasi;


                    $conn->query("UPDATE `user` SET `percobaan` = '1' WHERE `user`.`username` = '$nama';");

                    header("location: pemesananlayanan.php?jenis=$jenis");
                }
            }
        }
    } else if ($jenis == 2) {
        $cek = $conn->query("SELECT * FROM `user` WHERE `username` = '$nama' && `percobaan` = 123;");
        if (mysqli_num_rows($cek) == 1) {
            $_SESSION['alert'] = "Paket ini hanya boleh dipesan 1 kali saja";
            header("location: pemesananlayanan.php?jenis=$jenis");
        } else {
            while ($upload == 0) {
                $cek = $conn->query("SELECT * FROM `langganan` WHERE `kode_pembayaran` = $random;");
                if (mysqli_num_rows($cek) >= 1) {
                    $random = $random + 1;
                    //echo $random;
                } else {
                    $date = $date->format('Y-m-d');
                    $date_jatuh = $date_jatuh->format('Y-m-d');
                    //echo $date_jatuh;
                    $harga_2 = $harga_2 * $durasi;
                    $conn->query("INSERT INTO `langganan` (`id`, `kode_pembayaran`, `atas_nama`, `layanan_perawatan`, `tanggal_pemesanan`, `tanggal_habis_tempo`, `total_pembayaran`, `status`) VALUES (NULL, '$random', '$nama', '$jenis', '$date_reference', '$date_jatuh', $harga_2, 'menunggu konfirmasi');");
                    $upload = 1;
                    echo "selesai";
                    $_SESSION['alert'] = "Paket telah berhasil didaftarkan. Silahkan melakukan pembayaran";


                    $_SESSION['nomor'] = $random;
                    $_SESSION['tanggal'] = $date_reference;
                    $_SESSION['layanan'] = "Kucing Mewah";
                    $_SESSION['durasi'] = $date_reference . " hingga " . $date_jatuh;
                    $_SESSION['total'] = $harga_2;
                    $_SESSION['bulan'] = $durasi;

                    header("location: pemesananlayanan.php?jenis=$jenis");
                }
            }
        }
    } else if ($jenis == 3) {
        $cek = $conn->query("SELECT * FROM `user` WHERE `username` = '$nama' && `percobaan` = 123;");
        if (mysqli_num_rows($cek) == 1) {
            $_SESSION['alert'] = "Paket ini hanya boleh dipesan 1 kali saja";
            header("location: pemesananlayanan.php?jenis=$jenis");
        } else {
            while ($upload == 0) {
                $cek = $conn->query("SELECT * FROM `langganan` WHERE `kode_pembayaran` = $random;");
                if (mysqli_num_rows($cek) >= 1) {
                    $random = $random + 1;
                    echo $random;
                } else {
                    $date = $date->format('Y-m-d');
                    $date_jatuh = $date_jatuh->format('Y-m-d');
                    //echo $date_jatuh;
                    $harga_3 = $harga_3 * $durasi;
                    $conn->query("INSERT INTO `langganan` (`id`, `kode_pembayaran`, `atas_nama`, `layanan_perawatan`, `tanggal_pemesanan`, `tanggal_habis_tempo`, `total_pembayaran`, `status`) VALUES (NULL, '$random', '$nama', '$jenis', '$date_reference', '$date_jatuh', $harga_3, 'menunggu konfirmasi');");
                    $upload = 1;
                    echo "selesai";
                    $_SESSION['alert'] = "Paket telah berhasil didaftarkan. Silahkan melakukan pembayaran";


                    $_SESSION['nomor'] = $random;
                    $_SESSION['tanggal'] = $date_reference;
                    $_SESSION['layanan'] = "Kucing Sultan";
                    $_SESSION['durasi'] = $date_reference . " hingga " . $date_jatuh;
                    $_SESSION['total'] = $harga_3;
                    $_SESSION['bulan'] = $durasi;

                    header("location: pemesananlayanan.php?jenis=$jenis");
                }
            }
        }
    }
}
