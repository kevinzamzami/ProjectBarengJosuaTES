<?php
$nomor = "";
$tanggal = "";
$nama = "";
$layanan = "";
$durasi = "";
$total = "";
$status = "";


session_start();
if (isset($_SESSION['nomor'])) {
  $nomor = $_SESSION['nomor'];
  $tanggal = $_SESSION['tanggal'];
  $nama = $_SESSION['nama'];
  $layanan = $_SESSION['layanan'];
  $durasi = $_SESSION['durasi'];
  $total = $_SESSION['total'];
  $status = $_SESSION['status'];
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

  <div class="container mt-5 box white-colored">
    <h1 class="text-center mb-5 mt-3 white-colored">Pemesanan Layanan Perawatan Happy Cat</h1>

    <?php if (isset($_SESSION['alert'])) { ?>
      <div class="alert alert-success" role="alert">
        <?php
        echo $_SESSION['alert'];
        unset($_SESSION['alert']);
        ?>
      </div>
    <?php } ?>

    <div class="row">
      <div class="col-md-6 border-right-style ps-2 pe-4">
        <h3 class=" mt-3 white-colored">Formulir Pemesanan</h3>
        <form class="" action="operasi.php" method="POST">
          <input type="hidden" name="tanggal_pemesanan" value="<?php echo date("d-m-Y"); ?>">
          <input type="hidden" name="jenis" value="<?php echo $_GET['jenis']; ?>">
          <div class="mb-3">
            <label><strong>Atas Nama</strong></label>
            <input class="form-control" type="text" name="nama" value="<?php echo $_SESSION['nama'] ?>" readonly required>
          </div>

          <div class="mb-3">
            <label><strong>Layanan Perawatan</strong></label>
            <input class="form-control" type="text" name="layanan" value="<?php
                                                                          if ($_GET['jenis'] == 1) {
                                                                            echo "Percobaan Pertama";
                                                                          } else if ($_GET['jenis'] == 2) {
                                                                            echo "Kucing Mewah";
                                                                          } else {
                                                                            echo "Kucing Sultan";
                                                                          }
                                                                          ?>
                                                                          " readonly>
          </div>

          <div class="mb-3">
            <label><strong>Durasi Berlangganan</strong></label>
            <select class="form-control" name="durasi" id="">
              <option value="1" <?php if (isset($_SESSION['bulan'])) {
                                  if ($_SESSION['bulan'] == 1) {
                                    echo "selected";
                                  }
                                } ?>>1 Bulan</option>


              <?php if ($_GET['jenis'] != 1) { ?>
                <option value="3" <?php if (isset($_SESSION['bulan'])) {
                                    if ($_SESSION['bulan'] == 3) {
                                      echo "selected";
                                    }
                                  } ?>>3 Bulan</option>
                <option value="6" <?php if (isset($_SESSION['bulan'])) {
                                    if ($_SESSION['bulan'] == 6) {
                                      echo "selected";
                                    }
                                  } ?>>6 Bulan</option>
                <option value="12" <?php if (isset($_SESSION['bulan'])) {
                                      if ($_SESSION['bulan'] == 12) {
                                        echo "selected";
                                      }
                                    } ?>>12 Bulan</option>

              <?php } ?>
            </select>
          </div>

          <div class="mb-3">
            <input class="btn btn-dark btn-lg button-download-style w-100" type="submit" value="Daftar" name="submit_pesanan">
          </div>


        </form>
      </div>
      <div class="col-md-6">
        <h3 class=" mt-3 white-colored">Detail Pemesanan</h3>
        <!-- Kotak Disebelahnya  -->
        <table class="mt-3" cellpadding="10">
          <tr>
            <td><strong><?php echo "Nomor" ?></strong></td>
            <td>:</td>
            <td><?php echo $nomor ?></td>
          </tr>


          <tr>
            <td><strong><?php echo "Tanggal Pemesanan" ?></strong></td>
            <td>:</td>
            <td><?php echo $tanggal ?></td>
          </tr>

          <tr>
            <td><strong><?php echo "Atas Nama" ?></strong></td>
            <td>:</td>
            <td><?php echo $nama ?></td>
          </tr>

          <tr>
            <td><strong><?php echo "Layanan Perawatan" ?></strong></td>
            <td>:</td>
            <td><?php echo $layanan ?></td>
          </tr>

          <tr>
            <td><strong><?php echo "Durasi Berlangganan" ?></strong></td>
            <td>:</td>
            <td><?php echo $durasi ?></td>
          </tr>

          <tr>
            <td><strong><?php echo "Total Pembayaran" ?></strong></td>
            <td>:</td>
            <td><?php echo $total ?></td>
          </tr>

          <tr>
            <td><strong><?php echo "Status" ?></strong></td>
            <td>:</td>
            <td><?php echo "$status" ?></td>
          </tr>


        </table>
      </div>

    </div>





  </div>

  <?php if (isset($_SESSION['nomor'])) { ?>
    <div class="container mt-5 box">
      <h1 class="text-center mb-5 mt-3 white-colored">Tata Cara Pembayaran</h1>
      <div class="row mx-auto white-colored" style="width: 70%;">
        <ul style="list-style-type:circle">
          <li class="fs-6">Lakukan transfer ke DANA(+62 896-5436-2274) ATAU ShopeePay(+62 896-5436-2274) sesuai dengan jumlah yang harus dibayarkan.</li>
          <li class="fs-6">Kirimkan Bukti Transfer ke Whatsapp(+62 896-5436-2274) dengan menuliskan Nomor Pemesanan.</li>
          <li class="fs-6">Silahkan tunggu konfirmasi paling lambat 1x24 jam.</li>
        </ul>
        <p class="text-center">Nomor Pemesanan Anda : </p>
        <h1 class="text-center"><?php echo $nomor ?></h1>
      <?php
      unset($_SESSION['nomor']);
      unset($_SESSION['tanggal']);
      unset($_SESSION['layanan']);
      unset($_SESSION['durasi']);
      unset($_SESSION['total']);
      unset($_SESSION['bulan']);
    }
      ?>
      </div>





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
</body>

</html>