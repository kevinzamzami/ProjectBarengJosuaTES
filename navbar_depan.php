<?php ?>


<!-- Nav Bar -->
<nav class="navbar navbar-expand-lg navbar-dark mb-5" data-aos="fade-down" data-aos-duration="1000" style="z-index: 999999;">
    <span class="navbar-brand brand-style">Happy Cat.</span>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar List & Item -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav navbar-style">
            <li class="nav-item nav-item-style"><a class="nav-link" href="index.php">Beranda</a></li>
            <li class="nav-item nav-item-style"><a class="nav-link" href="tentang.php">Tentang</a></li>
            <li class="nav-item nav-item-style"><a class="nav-link" href="index.php#contact">Kontak</a></li>
            <li class="nav-item nav-item-style"><a class="nav-link" href="index.php#pricing">Produk</a></li>
            <li class="nav-item nav-item-style"><a class="nav-link" href="blog.php">Blog</a></li>

            <?php if (isset($_SESSION["username"])) { ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Akun Saya
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <p class="fw-bold ps-2 mb-0"> Halo, <?php echo $_SESSION['nama']; ?></p>
                            <p class="fs-6 ps-2 mb-2"> <?php echo $_SESSION['username']; ?> </p>
                        </li>
                        <li><a class="dropdown-item" href="datalangganan.php">Langganan Saya</a></li>
                        <li><a class="dropdown-item" href="gantipassword.php">Ganti Password</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
                </li>
            <?php } ?>
        </ul>
    </div>
</nav>