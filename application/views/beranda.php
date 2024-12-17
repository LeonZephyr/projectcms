<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/frontend/css/animate.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/frontend/css/main.css'); ?>">


    <title><?= $judul; ?></title>
    <style>
    .jumbotron {
        width: 100%;
        height: 250px;
    }

    .jumbotron h2 {
        padding-bottom: 0;
    }
    </style>
</head>

<body>
    <header class="header bg">
        <div class="container text-white">
            <div class="row align-items-center">
                <div class="col-sm-3 text-left px-1">
                    <a class=" navbar-brand href=index.html">
                        <style>
                        .logoside {
                            width: 250px;
                            /* Atur lebar sesuai kebutuhan */
                            height: auto;
                            /* Menjaga proporsi gambar */
                            max-width: 100%;
                            /* Memastikan gambar tidak melampaui kontainernya */
                            margin-right: 50px;
                        }

                        .logo {
                            size: 90px;
                            width: 335px;
                            margin-left: 95px;
                        }
                        </style>

                        <img src="<?= base_url('assets/upload/logo/logo-navbar.png'); ?>" alt="logo" class="logoside">
                    </a>
                </div>
                <div class="col-sm-4 text-center" style="">
                    <a class="navbar-brand" href="index.html">
                        <img src="<?= base_url('assets/upload/logo/logo2.png'); ?>" alt="logo" class="logo">
                    </a>
                </div>

                <div class="col-sm-5 text-right">
                    <a href="<?= base_url('auth') ?>" class="btn btn-primary">Register</a>
                </div>

            </div>
            <!--/row-->
        </div>
        <!--container-->
    </header>
    <span class="position-absolute trigger">
        <!-- hidden trigger to apply 'stuck' styles -->
    </span>
    <nav class="navbar navbar-expand-sm sticky-top navbar-dark">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbar1">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar1">
                <ul class="navbar-nav">
                    <a href="<?= base_url() ?>" class="nav-item nav-link">Home</a>
                    <?php foreach($kategori as $ii) {?>
                    <a href="<?= base_url('home/kategori/'.$ii['id_kategori']) ?>" class="nav-item nav-link">
                        <?= $ii['nama_kategori'] ?> </a>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <!--container end-->
    </nav>
    <!--Section-1-->
    <section class="section-1">
        <style>
        /* CSS untuk Carousel */
        .carousel-inner img {
            width: 100%;
            height: 600px;
            /* Atur tinggi gambar */
            object-fit: cover;
            /* Gambar penuh sesuai ukuran */
        }

        /* Styling Judul dan Teks Overlay */
        .carousel-caption {
            position: absolute;
            bottom: 20%;
            left: 50%;
            transform: translateX(-50%);
            text-align: center;
            color: white;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);
        }

        .carousel-caption h1 {
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .carousel-caption p {
            font-size: 1.2rem;
        }
        </style>


        <div class="container-fluid mb-5">
            <div class="d-flex flex-column align-items-center justify-content-center">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <?php $no = 1; foreach($caraousel as $aa) { ?>
                        <div class="carousel-item <?php if($no == 1) { echo 'active'; } ?>">
                            <img src="<?= base_url('assets/upload/caraousel/'.$aa['foto']) ?>" class="d-block w-100"
                                alt="Carousel Image">
                        </div>
                        <?php $no++; } ?>
                    </div>

                    <!-- Tombol Navigasi -->
                    <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls"
                        data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-target="#carouselExampleControls"
                        data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </section>


    <!-- blog-single Section Start -->
    <div id="blog-single">
        <section class="section4 more-blog" data-aos="fade-up" data-aos-duration="700">
            <h2 class="background"><span>Konten</span></h2>
            <div class="container" border="1">
                <div class="row pb-3" data-aos="fade-up" data-aos-duration="700">
                    <?php foreach($konten as $aa) {?>
                    <div class="col-lg-4 mb-4 mt-3">
                        <div class="card">
                            <img class="card-img-top mb-2" src="<?= base_url('assets/upload/konten/'.$aa['foto'])?>"
                                alt="Portfolio 2" style="border-radius: 10px;">
                            <div class="card-body text-center">
                                <h4 class="text-center"><?= $aa['judul']?></h4>
                                <div class="d-flex justify-content-center mb-3">
                                    <small class="mr-3"><i class="fa fa-user text-primary"></i>
                                        <?= $aa['nama'] ?></small>
                                    <small class="mr-3">
                                        <i class="fa fa-folder text-primary"></i>
                                        <?= $aa['nama_kategori'] ?>
                                    </small>

                                </div>
                                <a href="<?= base_url('home/artikel/'.$aa['slug'] )?>"
                                    class="btn btn-primary px-4 mx-auto my-2" style="border-radius: 10px;">Baca
                                    Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>

            </div>
        </section>
    </div>

    <!-- Blog_single Section End -->

    <section class="section-7">
        <!-- Footer -->
        <footer class="page-footer font-small stylish-color-dark">

            <!-- Footer Links -->
            <div class="container text-center text-md-left">

                <!-- Grid row -->
                <div class="row">

                    <!-- Grid column -->
                    <div class="col-lg-5 col-sm-12 mx-auto box-1">

                        <!-- Content -->
                        <style>
                        .styled-title {
                            font-family: 'Poppins', sans-serif;
                            /* Font yang modern */
                            font-size: 2rem;
                            /* Ukuran teks */
                            color: black;
                            /* Warna biru cerah */
                            font-weight: bold;
                            letter-spacing: 2px;
                            /* Jarak antar huruf */
                            text-transform: uppercase;
                            /* Semua huruf kapital */
                            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
                            /* Efek bayangan */
                            position: relative;
                            display: inline-block;
                            overflow: hidden;
                            padding: 5px 10px;
                        }

                        /* Efek garis di bawah teks */
                        .styled-title::after {
                            content: '';
                            position: absolute;
                            left: 0;
                            bottom: 0;
                            height: 3px;
                            width: 100%;
                            background: linear-gradient(90deg, #e74c3c, #f39c12, #2ecc71, #3498db);
                            /* Gradien warna */
                            animation: line-animation 2s infinite;
                        }

                        /* Efek animasi garis */
                        @keyframes line-animation {
                            0% {
                                transform: translateX(-100%);
                            }

                            100% {
                                transform: translateX(100%);
                            }
                        }

                        /* Hover animasi untuk teks */
                        .styled-title:hover {
                            color: #f39c12;
                            /* Warna berubah saat hover */
                            transition: color 0.3s ease-in-out;
                        }
                        </style>

                        <i><span class="styled-title"><?= $konfig->judul_website ; ?></span>
                        </i>
                        <p><?= $konfig->profil_website ; ?></p>
                        <div class="d-flex justify-content-start mt-4">
                            <a class="btn btn-outline-dark rounded-circle text-center mr-2 px-0"
                                style="width: 38px; height: 38px" href="<?= $konfig->no_wa ; ?>"><i
                                    class="fab fa-whatsapp"></i></a>
                            <a class="btn btn-outline-dark rounded-circle text-center mr-2 px-0"
                                style="width: 38px; height: 38px" href="<?= $konfig->tiktok ; ?>"><i
                                    class="fab fa-tiktok"></i></a>
                            <a class="btn btn-outline-dark rounded-circle text-center mr-2 px-0"
                                style="width: 38px; height: 38px" href="<?= $konfig->instagram ; ?>"><i
                                    class="fab fa-instagram"></i></a>
                        </div>

                    </div>
                    <!-- Grid column -->
                    <!-- Grid column -->
                    <div class="col-lg-4 col-mb-4 box-2 mx-auto me-4 ">
                        <h5 style="font-size:30px;">
                            Personal
                        </h5>
                        <ul class="list-unstyled">
                            <div class="d-flex">
                                <i class="fa-solid fa-location-dot fa-xl mt-3"></i>
                                <div class="pl-3">
                                    <a href="index.html" style="font-size: 16px;">Alamat</a><span>
                                        <p><?= $konfig->alamat ; ?></p>
                                    </span>
                                </div>
                            </div>
                        </ul>
                        <ul class="list-unstyled">
                            <div class="d-flex">
                                <i class="fa-solid fa-envelope fa-xl mt-3"></i>
                                <div class="pl-3">
                                    <a href="index.html" style="font-size: 16px;">Email</a><span>
                                        <p><?= $konfig->email ; ?></p>
                                    </span>
                                </div>

                            </div>
                        </ul>

                    </div>
                    <!-- Grid column -->

                    <hr class="clearfix w-100 d-md-none">

                    <!-- Grid column -->
                    <div class="col-lg-3 col-mb-4 box-3 mx-auto ms-4">

                        <!-- Links -->
                        <h5 style="font-size:29px;">Landing
                            Pages</h5>

                        <ul class="list-unstyled">
                            <li>
                                <a href="<?= base_url()?>"></a>
                            </li>
                            <?php foreach($kategori as $ii) {?>
                            <li>
                                <a href="<?= base_url()?>"><?= $ii['nama_kategori'] ?></a>
                            </li>
                            <?php } ?>
                        </ul>

                    </div>
                    <!-- Grid column -->

                    <hr class="clearfix w-100 d-md-none">


                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

            </div>
            <!-- Footer Links -->


            <!-- Copyright -->
            <div class="footer-copyright text-center">
                <div class="gradient"></div>
                <p
                    style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">
                    © 2024, All Rights reserved designed by
                    <?= $konfig->judul_website ; ?>
                </p>
            </div>
            <!-- Copyright -->

        </footer>
        <!-- Footer -->
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src=" https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="<?= base_url('assets/frontend/js/animate.js'); ?>"></script>
    <script src="<?= base_url('assets/frontend/js/custom.js'); ?>"></script>

</body>

</html>