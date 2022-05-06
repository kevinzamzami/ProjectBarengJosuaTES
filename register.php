<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;500;700;900&family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">

  <title>Happy Cat - Register</title>
</head>

<body>

  <div class="container-sm">
    <!-- Nav Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark mb-5" data-aos="fade-down" data-aos-duration="1000">
      <span class="navbar-brand brand-style">Happy Cat.</span>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Navbar List & Item -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav navbar-style ms-auto">
          <li class="nav-item nav-item-style"><a class="nav-link" href="index.php">Beranda</a></li>
          <li class="nav-item nav-item-style"><a class="nav-link" href="tentang.php">Tentang</a></li>
          <li class="nav-item nav-item-style"><a class="nav-link" href="index.php#contact">Kontak</a></li>
          <li class="nav-item nav-item-style"><a class="nav-link" href="index.php#pricing">Produk</a></li>
          <li class="nav-item nav-item-style"><a class="nav-link" href="blog.php">Blog</a></li>
        </ul>
      </div>
    </nav>
  </div>

  <div class="container">
    <form action="operasi.php" method="POST" class="login-email">
      <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>

      <?php if (isset($_SESSION['alert'])) { ?>
        <div class="alert alert-danger" role="alert">
          <?php
          echo $_SESSION['alert'];
          unset($_SESSION['alert']);
          ?>
        </div>
      <?php } ?>

      <div class="input-group">
        <input type="text" placeholder="Username" name="username" value="" required>
      </div>
      <div class="input-group">
        <input type="text" placeholder="Full Name" name="nama" value="" required>
      </div>
      <div class="input-group">
        <input type="password" placeholder="Password" name="password" value="" required>
      </div>
      <div class="input-group">
        <input type="password" placeholder="Confirm Password" name="cpassword" value="" required>
      </div>
      <div class="input-group">
        <button name="submit_register" class="btn">Register</button>
      </div>
      <p class="login-register-text">Have an account? <a href="login.php">Login Here</a>.</p>
    </form>
  </div>



  <footer id="footer2">
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
  <script src="https://kit.fontawesome.com/a80ad92363.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>