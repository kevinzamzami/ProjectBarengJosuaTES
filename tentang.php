<!-- Nama : Aysia Fatmi Yasmin -->
<!-- NPM : 2010631250033 -->
<?php session_start(); ?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Aysia Fatmi Yasmin">
  <link rel="icon" href="favicon/favicon.ico">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/a80ad92363.js" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;500;700;900&family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/styles.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <title>CatCare by Aysia</title>

  <style>
    .big-header-style {
      font-size: 300%;
    }

    .carousel {
      width: 100%;

    }

    .carousel-item img {
      border-radius: 20px;
    }

    .button-download-group-style {

      width: 100%;
      margin: auto;

    }

    .mockup-style {
      width: 42.5%;
    }
  </style>
</head>

<body>
  <section id="title">
    <div class="container-fluid">

      <!-- Nav Bar -->
      <?php include 'navbar_depan.php' ?>

      <!-- Title's grid system -->
      <div class="row title-grid-style">
        <div class="col-md-6 pe-5" data-aos="fade-right" data-aos-duration="1000">
          <h1 class="big-header-style">tentang kami.</h1>
          <p class="text-white-color-style">Kami adalah pecinta kucing sekaligus pengembang aplikasi. Happy Cat adalah aplikasi
            kontrol perawatan kucing sekaligus penjualan produk Happy Cat sebagai sarana perawatan kucing nomor 1
            di Indonesia. Kami berdiri dinaungi PT Aysia Corp dengan segudang pengalaman dan keahlian
            kehewanan terutama kucing. Produk kami berupa perawatan kucing yang dapat anda pesan melalui website maupun
            aplikasi di ponsel anda. Kami yang terbaik dari yang terbaik.
          </p>
          <div class="button-download-group-style">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="images/2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="images/1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="images/3.jpg" class="d-block w-100" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
        <div class="col-md-6 ps-3">
          <img class="mockup-style mt-3" data-aos="fade-up" data-aos-duration="1000" src="images/iphone12.png" alt="iphone-mockup">
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->

  <footer id="footer">
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>