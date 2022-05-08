<?php
$nomor = "";
$tanggal = "";
$nama = "";
$layanan = "";
$durasi = "";
$total = "";


session_start();
if (isset($_SESSION['nomor'])) {
    $nomor = $_SESSION['nomor'];
    $tanggal = $_SESSION['tanggal'];
    $nama = $_SESSION['nama'];
    $layanan = $_SESSION['layanan'];
    $durasi = $_SESSION['durasi'];
    $total = $_SESSION['total'];
}
include 'login_check.php';
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
    </style>
    <title>Happy Cat - Pemesanan Layanan</title>
</head>




<body>
    <section id="title" style="padding: 1% 15% 1%;">
        <div class="container-fluid">
            <?php include 'navbar_depan.php'; ?>
        </div>

    </section>
    <section id="cta">

        <div class="container-fluid">
            <h1 id="contact" class="brand-style contact-us-style" data-aos="fade-right" data-aos-duration="1000">Ganti Password</h1>



            <?php if (isset($_SESSION['alert'])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?php
                    echo $_SESSION['alert'];
                    unset($_SESSION['alert']);
                    ?>
                </div>
            <?php } ?>


            <form action="operasi.php" method="POST">
                <div class="mb-3" data-aos="fade-left" data-aos-duration="1000">
                    <label class="label-text-style" name="passwordlama" for="passwordlama_id" class="form-label">Password Lama</label>
                    <input name="password_lama" type="password" class="form-control" id="passwordlama_id" autocomplete="off">
                </div>
                <br>
                <div class="mb-3" data-aos="fade-left" data-aos-duration="1000">
                    <label class="label-text-style" name="passwordlama" for="passwordlama_id" class="form-label">Password Baru</label>
                    <input name="password_baru" type="password" class="form-control" id="passwordlama_id" autocomplete="off">
                </div>
                <div class="mb-3" data-aos="fade-left" data-aos-duration="1000">
                    <label class="label-text-style" name="passwordlama" for="passwordlama_id" class="form-label">Konfirmasi Password Baru</label>
                    <input name="konfirmasi" type="password" class="form-control" id="passwordlama_id" autocomplete="off">
                </div>

                <button data-aos="fade-up" data-aos-duration="1000" type="submit" name="submit_ganti" class="btn btn-dark btn-lg button-download-style cta-button-style">Confirm</button>
            </form>
        </div>

    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>