<?php
session_start();
include 'login_check.php';
include 'konfigurasi.php';

$nama = $_SESSION['nama'];
$hasil = $conn->query("SELECT * FROM `langganan` WHERE `atas_nama` = '$nama'");




?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Aysia Fatmi Yasmin">
    <link rel="icon" href="favicon/favicon.ico">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a80ad92363.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;500;700;900&family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->

    <style>
        body,
        html {
            height: 100%;
            margin: 0;
        }

        .bg {
            /* The image used */
            background-image: url("img/pesawat.jpg");

            /* Full height */
            height: 100%;

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;

            padding-top: 3%;
        }

        #title {
            background-color: white;
            padding: 3% 15% 2%;
        }

        .navbar-dark .navbar-toggler-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255,102,203, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
        }

        .navbar-dark.navbar-toggler {
            border-color: rgb(255, 102, 203);
        }


        .navbar-dark .navbar-brand {
            color: #ff4c68;
        }

        .navbar-dark .navbar-nav .nav-link {
            color: rgba(255, 76, 104, .55);
        }

        .border-right-style {
            border-right: 0px dotted grey;
        }

        .box {
            background: #ff4c68;
            padding: 2% 3%;
            border-radius: 20px;
        }

        .white-colored {
            color: white;
        }

        .myButton {
            box-shadow: inset 0px 1px 0px 0px #fff6af;
            background: linear-gradient(to bottom, #ffec64 5%, #ffab23 100%);
            background-color: #ffec64;
            border-radius: 8px;
            display: inline-block;
            cursor: pointer;
            color: #ffffff;
            font-family: Verdana;
            font-size: 12px;
            padding: 9px 30px;
            text-decoration: none;
        }

        .myButton:hover {
            background: linear-gradient(to bottom, #ffab23 5%, #ffec64 100%);
            background-color: #ffab23;
        }

        .myButton:active {
            position: relative;
            top: 1px;
        }

        .tg {
            border-collapse: collapse;
            border-color: #aaa;
            border-spacing: 0;
            margin: 0px auto;
        }

        .tg td {
            /* background-color: #fff; */
            border-color: #aaa;
            border-style: solid;
            border-width: 1px;
            color: #333;
            font-family: Arial, sans-serif;
            font-size: 14px;
            overflow: hidden;
            padding: 17px 20px;
            word-break: normal;
        }

        .tg th {
            background-color: #f38630;
            border-color: #aaa;
            border-style: solid;
            border-width: 1px;
            color: #fff;
            font-family: Arial, sans-serif;
            font-size: 14px;
            font-weight: normal;
            overflow: hidden;
            padding: 17px 20px;
            word-break: normal;
        }

        .tg .tg-yojk {
            background-color: #ff4c68;
            border-color: inherit;
            color: #ffffff;
            font-family: inherit;
            position: -webkit-sticky;
            position: sticky;
            text-align: center;
            top: -1px;
            vertical-align: middle;
            will-change: transform
        }

        .tg .tg-xwd1 {
            border-color: inherit;
            font-family: inherit;
            text-align: center;
            vertical-align: middle
        }

        .tg .tg-u3ui {
            border-color: inherit;
            font-family: inherit;
            font-weight: bold;
            text-align: center;
            vertical-align: middle
        }

        .tg-sort-header::-moz-selection {
            background: 0 0
        }

        .tg-sort-header::selection {
            background: 0 0
        }

        .tg-sort-header {
            cursor: pointer
        }

        .tg-sort-header:after {
            content: '';
            float: right;
            margin-top: 7px;
            border-width: 0 5px 5px;
            border-style: solid;
            border-color: #404040 transparent;
            visibility: hidden
        }



        .tg-sort-header:hover:after {
            visibility: visible
        }

        .tg-sort-asc:after,
        .tg-sort-asc:hover:after,
        .tg-sort-desc:after {
            visibility: visible;
            opacity: .4
        }

        .tg-sort-desc:after {
            border-bottom: none;
            border-width: 5px 5px 0
        }

        .red-box {
            color: white;
            font-weight: bold;
            background-color: red;
            padding-left: 5px;
            padding-right: 5px;
            text-align: center;
            border-radius: 5px;
        }

        .yellow-box {
            color: white;
            font-weight: bold;
            background-color: #CCCC00;
            padding-left: 5px;
            padding-right: 5px;
            text-align: center;
            border-radius: 5px;

        }

        .green-box {
            color: white;
            font-weight: bold;
            background-color: green;
            padding-left: 5px;
            padding-right: 5px;
            text-align: center;
            border-radius: 5px;

        }

        @media screen and (max-width: 767px) {
            .tg {
                width: auto !important;
            }

            .tg col {
                width: auto !important;
            }

            .tg-wrap {
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
                margin: auto 0px;
            }
        }

        .clickable-row:hover {
            background-color: #ff4c68;
            color: white;

        }

        .clickable-row {
            transition: 0.5s;
        }
    </style>
    <title>Happy Cat - Pemesanan Layanan</title>
</head>




<body>

    <section id="title" style="padding: 1% 15% 1%;">
        <div class="container-fluid">
            <?php include 'navbar_depan.php'; ?>
        </div>

    </section>
    <div class="tg-wrap">
        <h1 class="text-center mb-3 mt-3" style="color: #ff4c68;">Data Langganan <?php echo $nama ?></h1>

        <table id="tg-rCzxG" class="tg">
            <!-- HEADER  -->
            <thead>
                <tr>
                    <th class="tg-yojk">Kode Pembayaran</th>
                    <!-- <th class="tg-yojk">Atas Nama</th> -->
                    <th class="tg-yojk">Layanan Perawatan</th>
                    <th class="tg-yojk">Tanggal Pemesanan</th>
                    <th class="tg-yojk">Tanggal Habis Tempo Layanan</th>
                    <th class="tg-yojk">Status</th>
                    <th class="tg-yojk">Total Pembayaran</th>
                </tr>
            </thead>

            <tbody>
                <!-- Clickable row adalah anchor buatan agar row bisa seperti anchor -->
                <?php foreach ($hasil as $data) {
                    $status = $data['status'];

                    $date_reference1 = $data['tanggal_habis_tempo'];
                    $date1 = date_create($date_reference1);
                    $date_reference2 = date("Y-m-d");
                    $date2 = date_create($date_reference2);

                    if ($date2 < $date1) {
                    } else if ($date2 > $date1) {
                        $status = "Non Aktif";
                    }


                    $nomor = $data['kode_pembayaran'] ?>
                    <tr class="clickable-row" data-href='detailpemesanan.php?nomor=<?php echo $nomor ?>'>
                        <td class="tg-u3ui"><?php echo $data['kode_pembayaran'] ?></td>
                        <!-- <td class="tg-xwd1">Kevin Zamzami</td> -->
                        <td class="tg-xwd1"><?php if ($data['layanan_perawatan'] == 1) {
                                                echo "Percobaan Pertama";
                                            } else if ($data['layanan_perawatan'] == 2) {
                                                echo "Kucing Mewah";
                                            } else {
                                                echo "Kucing Sultan";
                                            } ?></td>
                        <td class="tg-xwd1"><?php echo $data['tanggal_pemesanan'] ?></td>
                        <td class="tg-xwd1"><?php echo $data['tanggal_habis_tempo'] ?></td>
                        <td class="tg-xwd1"><span class="<?php if ($status == "Belum Bayar") {
                                                                echo "yellow-box";
                                                            } else if ($status == "Aktif") {
                                                                echo "green-box";
                                                            } else {
                                                                echo "red-box";
                                                            } ?>"><?php echo $status ?></span></td>
                        <td class="tg-xwd1"><?php echo $data['total_pembayaran'] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <p class="text-center">Pilih baris pesanan untuk melihat rincian pesanan</p>
    </div>

    <footer id="footer2" style="text-align:center;">
        <div class="container-fluid">
            <div class="footer-icon">
                <i class="fab fa-twitter footer-icon-style"></i>
                <i class="fab fa-facebook-f footer-icon-style"></i>
                <i class="fab fa-instagram footer-icon-style"></i>
                <i class="fas fa-envelope footer-icon-style"></i>

            </div>
            <p class="copyright-style">© Copyright 2022 Aysia Fatmi Yasmin</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="script/sorting.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".clickable-row").click(function() {
                window.location = $(this).data("href");
            });
        });
    </script>
</body>

</html>