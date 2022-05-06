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

    <title>Blog - Happy Cat by Aysia</title>

    <style>
        .title-grid-style {
            border-radius: 50px;
            background-color: #ff4c68;
            padding-bottom: 5%;

        }

        .big-header-style {
            color: black;
            text-align: center;
            font-size: 200%;
        }

        .blog-container-style {
            width: 98%;
            margin: auto;
            padding-left: 5%;
            padding-right: 5%;
        }

        .card {
            border-radius: 20px;
        }

        .card-img {
            border-radius: 20px;
            border-bottom-left-radius: 0px;
            border-bottom-right-radius: 0px;

        }

        .card-title {
            margin-bottom: 0.3rem;
        }

        .cat {
            display: inline-block;
            margin-bottom: 1rem;
        }

        .fa-users {
            margin-left: 1rem;
        }

        .card-footer {
            font-size: 0.8rem;
        }

        .btn:hover {
            background-color: white;
        }

        .card i {
            color: #ff4c68 !important;
        }
    </style>
</head>

<body>
    <section id="title">
        <div class="container-fluid">

            <!-- Nav Bar -->
            <?php include 'navbar_depan.php' ?>

        </div>
    </section>

    <section id="blog">
        <div class="mt-5">
            <h1 class="big-header-style">Blog Kami.</h1>
        </div>
        <div class="container-fluid " data-aos="fade-up" data-aos-duration="1000">
            <div class="row title-grid-style mt-4 blog-container-style">
                <div class="col-12 col-sm-8 col-md-6 col-lg-4 mt-3 mb-3" data-aos="fade-up" data-aos-duration="1000">
                    <div class="card">
                        <img class="card-img" src="images/blog1.jpg">
                        <div>
                            <button class="btn btn-light btn-sm">Care</button>
                        </div>
                        <div class="card-body nohover">
                            <h4 class="card-title">Kenapa kucing muntah saat dikasih makanan mahal?</h4>
                            <small class="text-muted cat">
                                <i class="far fa-clock text-info"></i> 30 minutes ago
                                <i class="fas fa-users text-info"></i> 4 shared
                            </small>
                            <p class="card-text">Kucing muntah dengan makanan mahal, sedangkan kalau makanan murah, smile.</p>
                            <a href="#" class="btn btn-dark">Read More</a>
                        </div>
                        <div class="card-footer text-muted d-flex justify-content-between bg-transparent border-top-0">
                            <div class="views">Oct 20, 12:45PM
                            </div>
                            <div class="stats">
                                <i class="far fa-eye"></i> 1347
                                <i class="far fa-comment"></i> 12
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-12 col-sm-8 col-md-6 col-lg-4 mt-3 mb-3" data-aos="fade-up" data-aos-duration="1000">
                    <div class="card">
                        <img class="card-img" src="images/blog2.jpg">
                        <div>
                            <button class="btn btn-light btn-sm">Fakta</button>
                        </div>
                        <div class="card-body nohover">
                            <h4 class="card-title">Kenapa kucing prik?</h4>
                            <small class="text-muted cat">
                                <i class="far fa-clock text-info"></i> 30 minutes ago
                                <i class="fas fa-users text-info"></i> 4 shared
                            </small>
                            <p class="card-text">Tingkah lakunya aneh, lebih seperti caper. Kenapa ya?</p>
                            <a href="#" class="btn btn-dark">Read More</a>
                        </div>
                        <div class="card-footer text-muted d-flex justify-content-between bg-transparent border-top-0">
                            <div class="views">Oct 20, 12:45PM
                            </div>
                            <div class="stats">
                                <i class="far fa-eye"></i> 1347
                                <i class="far fa-comment"></i> 12
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-8 col-md-6 col-lg-4 mt-3 mb-3" data-aos="fade-up" data-aos-duration="1000">
                    <div class="card">
                        <img class="card-img" src="images/blog3.jpg">
                        <div>
                            <button class="btn btn-light btn-sm">Care</button>
                        </div>
                        <div class="card-body nohover">
                            <h4 class="card-title">5 Kucing dengan Muka Terjelek di Dunia</h4>
                            <small class="text-muted cat">
                                <i class="far fa-clock text-info"></i> 30 minutes ago
                                <i class="fas fa-users text-info"></i> 4 shared
                            </small>
                            <p class="card-text">Kucing adalah binatang yang sangat imut, namun mukanya bisa juga jelek. kasihan ya.</p>
                            <a href="#" class="btn btn-dark">Read More</a>
                        </div>
                        <div class="card-footer text-muted d-flex justify-content-between bg-transparent border-top-0">
                            <div class="views">Oct 20, 12:45PM
                            </div>
                            <div class="stats">
                                <i class="far fa-eye"></i> 1347
                                <i class="far fa-comment"></i> 12
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-8 col-md-6 col-lg-4 mt-3 mb-3" data-aos="fade-up" data-aos-duration="1000">
                    <div class="card">
                        <img class="card-img" src="images/blog4.jpg">
                        <div>
                            <button class="btn btn-light btn-sm">Care</button>
                        </div>
                        <div class="card-body nohover">
                            <h4 class="card-title">Kucing raksasa ini ditemukan oleh penjual rimot</h4>
                            <small class="text-muted cat">
                                <i class="far fa-clock text-info"></i> 30 minutes ago
                                <i class="fas fa-users text-info"></i> 4 shared
                            </small>
                            <p class="card-text">Sangat mengagetkan dengan kemunculan kucing sebesar ini.</p>
                            <a href="#" class="btn btn-dark">Read More</a>
                        </div>
                        <div class="card-footer text-muted d-flex justify-content-between bg-transparent border-top-0">
                            <div class="views">Oct 20, 12:45PM
                            </div>
                            <div class="stats">
                                <i class="far fa-eye"></i> 1347
                                <i class="far fa-comment"></i> 12
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-8 col-md-6 col-lg-4 mt-3 mb-3" data-aos="fade-up" data-aos-duration="1000">
                    <div class="card">
                        <img class="card-img" src="images/blog6.jpg">
                        <div>
                            <button class="btn btn-light btn-sm">Care</button>
                        </div>
                        <div class="card-body nohover">
                            <h4 class="card-title">Kenapa kucing prik? part 2</h4>
                            <small class="text-muted cat">
                                <i class="far fa-clock text-info"></i> 30 minutes ago
                                <i class="fas fa-users text-info"></i> 4 shared
                            </small>
                            <p class="card-text">??</p>
                            <a href="#" class="btn btn-dark">Read More</a>
                        </div>
                        <div class="card-footer text-muted d-flex justify-content-between bg-transparent border-top-0">
                            <div class="views">Oct 20, 12:45PM
                            </div>
                            <div class="stats">
                                <i class="far fa-eye"></i> 1347
                                <i class="far fa-comment"></i> 12
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-8 col-md-6 col-lg-4 mt-3 mb-3" data-aos="fade-up" data-aos-duration="1000">
                    <div class="card">
                        <img class="card-img" src="images/blog5.jpg">
                        <div>
                            <button class="btn btn-light btn-sm">Care</button>
                        </div>
                        <div class="card-body nohover">
                            <h4 class="card-title">Ini dia kisah kucing kesayangan Rasulullah SAW</h4>
                            <small class="text-muted cat">
                                <i class="far fa-clock text-info"></i> 30 minutes ago
                                <i class="fas fa-users text-info"></i> 4 shared
                            </small>
                            <p class="card-text">Kucing adalah binatang kesayangan para malaikat dan Rasulullah, ini kisahnya.</p>
                            <a href="#" class="btn btn-dark">Read More</a>
                        </div>
                        <div class="card-footer text-muted d-flex justify-content-between bg-transparent border-top-0">
                            <div class="views">Oct 20, 12:45PM
                            </div>
                            <div class="stats">
                                <i class="far fa-eye"></i> 1347
                                <i class="far fa-comment"></i> 12
                            </div>
                        </div>
                    </div>
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