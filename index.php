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

  <title>Beranda - Happy Cat by Aysia</title>
</head>

<body>

  <!-- Title -->
  <section id="title">
    <div class="container-fluid">
      <?php include 'navbar_depan.php'; ?>
      <!-- Title's grid system -->
      <div class="row title-grid-style">
        <div class="col-md-6" data-aos="fade-right" data-aos-duration="1000">
          <h1 class="big-header-style">berikan perawatan terbaik untuk kucing anda.</h1>
          <div class="button-download-group-style">
            <?php if (isset($_SESSION["username"])) {
            } else { ?>
              <a type="button" class="btn btn-dark btn-lg button-download-style" href="register.php"> Sign Up </a>
              <a type="button" class="btn btn-outline-light btn-lg button-download-style" href="login.php"> Sign In </a>
            <?php } ?>

          </div>
        </div>
        <div class="col-md-6 ">
          <img class="mockup-style" data-aos="fade-up" data-aos-duration="1000" src="images/iphone12.png" alt="iphone-mockup">
        </div>
      </div>
    </div>
  </section>

  <!-- Features -->

  <section id="features">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 feature-item-style" data-aos="fade-down" data-aos-duration="1000">
          <i class="fas fa-check-circle feature-icon-style"></i>
          <h3 class="feature-header-style">Mudah digunakan.</h3>
          <p class="feature-description-style">Tampilan yang friendly, bahkan kucing anda dapat dilatih untuk menggunakan aplikasi ini.</p>
        </div>
        <div class="col-lg-4 feature-item-style" data-aos="fade-down" data-aos-duration="1000">
          <i class="fas fa-bullseye feature-icon-style"></i>
          <h3 class="feature-header-style">Yang terbaik dari para ahlinya.</h3>
          <p class="feature-description-style">Memberikan perawatan harian, saran perawatan, laporan masalah 24jam, dan pilihan jasa perawatan yang Worth It.</p>
        </div>
        <div class="col-lg-4 feature-item-style" data-aos="fade-down" data-aos-duration="1000">
          <i class="fas fa-heart feature-icon-style"></i>
          <h3 class="feature-header-style">Sangat Terpercaya.</h3>
          <p class="feature-description-style">Kepuasan anda adalah hal utama bagi kami.</p>
        </div>
      </div>
    </div>
  </section>


  <!-- Testimonials -->

  <section id="testimonials">
    <div id="carouselExampleControls" class="carousel slide" data-aos="fade-down" data-aos-duration="1000">
      <div class="carousel-inner">
        <div class="carousel-item active carousel-style">
          <h2 class="testimonial-text-style">Kulit saya terkena jamur karna bermain dengan kucing kampung milik tetangga. Saya bertanya kepada kucing tersebut mengapa dia tidak jamuran, dia bilang Happy Cat jawabannya</h2>
          <img class="testimonial-image-style" src="images/oren-img.png" alt="cat-profile">
          <em>Oren, Tokyo</em>
        </div>
        <div class="carousel-item carousel-style">
          <h2 class="testimonial-text-style">
            Bagus banget loh! Miaw</h2>
          <img class="testimonial-image-style" src="images/manis-img.png" alt="cat-profile">
          <em>Manis, Tambun</em>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>


  <!-- Press -->

  <section id="press">
    <label class="press-label-style">Partner Kami :</label>
    <div class="press-box-style" data-aos="fade-up" data-aos-duration="1000">
      <img class="press-image-style" src="images/tokopedia.png" alt="tokped-logo">
      <img class="press-image-style" src="images/spotify.png" alt="spot-logo">
      <img class="press-image-style" src="images/whatsapp.png" alt="wa-logo">
      <img class="press-image-style" src="images/gojek.png" alt="gojek-logo">
    </div>
  </section>


  <!-- Pricing -->

  <section id="pricing">
    <div class="container-fluid">
      <h2 class="pricing-header-style" data-aos="fade-down" data-aos-duration="1000">Perawatan Untuk Kebutuhan Kucing Anda</h2>
      <p data-aos="fade-down" data-aos-duration="1000">Paket harga yang sederhana dan terjangkau untuk anda dan kucing anda.</p>


      <div class="row pricing-table-style">
        <div class="col-lg-4 col-md-6 mt-3" data-aos="fade-up" data-aos-duration="1000">
          <div class="card">
            <div class="card-header">
              <h3 class="pricing-type-style">Perawatan Pertama</h3>
            </div>
            <div class="card-body">
              <h2 class="pricing-header-style">Gratis Percobaan Pertama</h2>
              <p>1x Grooming</p>
              <p>1x Potong kuku</p>
              <p>1x Tes Virus</p>
              <?php if (isset($_SESSION["username"])) { ?>
                <a href="pemesananlayanan.php?jenis=1" class="btn btn-outline-dark btn-lg pricing-button-style" style="margin-top: 40px;" type="button">Pesan Sekarang</a>
              <?php } else { ?>
                <a href="register.php" class="btn btn-outline-dark btn-lg pricing-button-style" style="margin-top: 40px;" type="button">Sign Up</a>
              <?php } ?>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-3" data-aos="fade-up" data-aos-duration="1000">
          <div class="card">
            <div class="card-header">
              <h3 class="pricing-type-style">Kucing Mewah</h3>
            </div>
            <div class="card-body">
              <h2 class="pricing-header-style">Rp. 500.000 / bulan</h2>
              <p>8x Grooming/bulan</p>
              <p>2x Perawatan Kuku/bulan</p>
              <p>1x Cek Kesehatan/bulan</p>
              <p>1x Penyembuhan/tahun</p>
              <?php if (isset($_SESSION["username"])) { ?>
                <a href="pemesananlayanan.php?jenis=2" class="btn btn-outline-dark btn-lg pricing-button-style" style="margin-top: 40px;" type="button">Pesan Sekarang</a>
              <?php } else { ?>
                <a href="register.php" class="btn btn-outline-dark btn-lg pricing-button-style" style="margin-top: 40px;" type="button">Sign Up</a>
              <?php } ?>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-12 mt-3" data-aos="fade-up" data-aos-duration="1000">
          <div class="card">
            <div class="card-header">
              <h3 class="pricing-type-style">Kucing Sultan</h3>
            </div>
            <div class="card-body">
              <h2 class="pricing-header-style">Rp. 900.000 / bulan</h2>
              <p>16x Grooming/bulan</p>
              <p>4x Perawatan Kuku/bulan</p>
              <p>2x Cek Kesehatan/bulan</p>
              <p>2x Penyembuhan/tahun</p>
              <?php if (isset($_SESSION["username"])) { ?>
                <a href="pemesananlayanan.php?jenis=3" class="btn btn-outline-dark btn-lg pricing-button-style" style="margin-top: 40px;" type="button">Pesan Sekarang</a>
              <?php } else { ?>
                <a href="register.php" class="btn btn-outline-dark btn-lg pricing-button-style" style="margin-top: 40px;" type="button">Sign Up</a>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Call to Action -->

  <section id="cta">
    <div class="container-fluid">
      <h1 class="big-header-style" data-aos="fade-right" data-aos-duration="1000">Kebesaran suatu bangsa dan kemajuan moralnya dapat dinilai dari cara hewan diperlakukan. -Mahatma Gandhi</h1>
      <button data-aos="fade-right" data-aos-duration="1000" type="button" class="btn btn-dark btn-lg button-download-style cta-button-style"><i class="fab fa-apple"></i> Download</button>
      <button data-aos="fade-left" data-aos-duration="1000" type="button" class="btn btn-light btn-lg button-download-style cta-button-style"><i class="fab fa-google-play"></i> Download</button>

      <p style="text-align: center;">
      <h1 id="contact" class="brand-style contact-us-style" data-aos="fade-right">Temui Kami.</h1>
      <iframe data-aos="fade-left" data-aos-duration="1000" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.666466960692!2d106.82496411396981!3d-6.175387062230964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5d2e764b12d%3A0x3d2ad6e1e0e9bcc8!2sMonumen%20Nasional!5e0!3m2!1sid!2sid!4v1647588392077!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </p>



      <h1 id="contact" class="brand-style contact-us-style" data-aos="fade-right" data-aos-duration="1000">Hubungi Kami.</h1>
      <form>
        <div class="mb-3" data-aos="fade-left" data-aos-duration="1000">
          <label class="label-text-style" name="subject" for="subject_id" class="form-label">Subject</label>
          <input name="subject" type="text" class="form-control" id="subject_id" autocomplete="off">
        </div>
        <div class="mb-3" data-aos="fade-right" data-aos-duration="1000">
          <label class="label-text-style" for="messages_id" class="form-label">Messages</label>
          <textarea class="form-control textarea-style" id="messages_id"></textarea>
        </div>
        <button data-aos="fade-up" data-aos-duration="1000" type="submit" class="btn btn-dark btn-lg button-download-style cta-button-style">Send</button>
      </form>
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