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