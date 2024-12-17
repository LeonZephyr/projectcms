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
                        width: 330px;
                        margin-left: 100px;
                    }
                    </style>
                    <img src="<?= base_url('assets/upload/logo/logo-navbar.png'); ?>" alt="logo" class="logo logoside">
                </a>
            </div>
            <div class="col-sm-4 text-center" style="width: 100px;">
                <a class="navbar-brand" href="index.html">
                    <img src="<?= base_url('assets/upload/logo/logo2.png'); ?>" alt="logo" class="logo">
                </a>
            </div>
            <div class="col-sm-5 text-right">
                <a href="<?= base_url('auth') ?>" class="btn btn-primary">Login</a>
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
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar1">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar1">
            <ul class="navbar-nav">
                <a href="<?= base_url() ?>" class="nav-item nav-link">Home</a>
                <?php foreach($kategori as $ii) {?>
                <a href="<?= base_url('home/kategori/'.$ii['id_kategori']) ?>" class="nav-item nav-link">
                    <?php echo $ii['nama_kategori'] ?> </a>
                <?php } ?>
            </ul>
        </div>

    </div>
    <!--container end-->
</nav>