<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo isset($title) ? $title : 'Dashboard'; ?></title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport">
    <link rel="icon" href="<?= site_url('assets/kaiadmin/')?>assets/img/kaiadmin/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <!-- Fonts and Icons -->
    <script src="<?= site_url('assets/kaiadmin/')?>assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
    WebFont.load({
        google: {
            families: ["Public Sans:300,400,500,600,700"]
        },
        custom: {
            families: [
                "Font Awesome 5 Solid",
                "Font Awesome 5 Regular",
                "Font Awesome 5 Brands",
                "simple-line-icons"
            ],
            urls: ["assets/css/fonts.min.css"]
        },
        active: function() {
            sessionStorage.fonts = true;
        }
    });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="<?= site_url('assets/kaiadmin/')?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= site_url('assets/kaiadmin/')?>assets/css/plugins.min.css">
    <link rel="stylesheet" href="<?= site_url('assets/kaiadmin/')?>assets/css/kaiadmin.min.css">
    <link rel="stylesheet" href="<?= site_url('assets/kaiadmin/')?>assets/css/demo.css">
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <div class="sidebar" data-background-color="dark">
            <div class="sidebar-logo">
                <div class="logo-header" data-background-color="dark">
                    <style>
                    .logo-leon {
                        width: 150px;
                        /* Atur lebar sesuai kebutuhan */
                        height: auto;
                        /* Menjaga rasio aspek gambar */
                        max-width: 100%;
                        /* Mencegah gambar melampaui kontainernya */
                    }
                    </style>
                    <a href="<?= base_url()?>" class="logo">
                        <img src="<?= base_url('assets/upload/logo/logo-leon.png'); ?>" alt="logo"
                            class="logo logoside logo-leon">

                    </a>
                    <div class="nav-toggle">
                        <button class="btn btn-toggle toggle-sidebar">
                            <i class="gg-menu-right"></i>
                        </button>
                        <button class="btn btn-toggle sidenav-toggler">
                            <i class="gg-menu-left"></i>
                        </button>
                    </div>
                    <button class="topbar-toggler more">
                        <i class="gg-more-vertical-alt"></i>
                    </button>
                </div>
            </div>
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
                <div class="sidebar-content">
                    <ul class="nav nav-secondary">
                        <?php $menu = $this->uri->segment(2); ?>
                        <li class="nav-item <?php if($menu=='home'){ echo 'active'; } ?>">
                            <a href="<?= site_url('admin/home')?>" class="collapsed" aria-expanded="false">
                                <i class="fas fa-home"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item <?php if($menu=='caraousel'){ echo 'active'; } ?>">
                            <a href="<?= site_url('admin/caraousel')?>">
                                <i class="fas fa-layer-group"></i>
                                <p>Caraousel</p>
                            </a>
                        </li>
                        <li class="nav-item <?php if($menu=='kategori'){ echo 'active'; } ?>">
                            <a href="<?= site_url('admin/kategori')?>">
                                <i class="fas fa-th-list"></i>
                                <p>Kategori Konten</p>
                            </a>
                        </li>
                        <li class="nav-item <?php if($menu=='konten'){ echo 'active'; } ?>">
                            <a href="<?= site_url('admin/konten')?>">
                                <i class="fas fa-gear"></i>
                                <p>Konten</p>
                            </a>
                        </li>
                        <li class="nav-item <?php if($menu=='user'){ echo 'active'; } ?>">
                            <a href="<?= site_url('admin/user')?>">
                                <i class="fas fa-user"></i>
                                <p>User</p>
                            </a>
                        </li>
                        <li class="nav-item <?php if($menu=='konfigurasi'){ echo 'active'; } ?>">
                            <a href="<?= site_url('admin/konfigurasi')?>">
                                <i class="fas fa-edit"></i>
                                <p>Konfigurasi</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Sidebar -->

        <div class="main-panel">
            <div class="main-header">
                <nav class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom">
                    <div class="container-fluid">

                        <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
                            <li class="nav-item topbar-user dropdown hidden-caret">
                                <a class="dropdown-toggle profile-pic" data-bs-toggle="dropdown" href="#">
                                    <div class="avatar-sm w-px-40 h-auto">
                                        <i class="fa-solid fa-user"></i>
                                    </div>
                                    <span class="profile-username">
                                        <span class="op-8"><?=$this->session->userdata('nama')?></span>
                                        <span class="fw-bold"></span>
                                    </span>
                                </a>
                                <ul class="dropdown-menu dropdown-user animated fadeIn">
                                    <div class="dropdown-user-scroll scrollbar-outer">
                                        <li>
                                            <a class="dropdown-item" href="">Password</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item"
                                                href="<?php echo site_url('auth/logout'); ?>">Logout</a>
                                        </li>
                                    </div>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>

            <div class="container">
                <div class="page-inner">
                    <div class="d-flex align-items-left align-items flex-column flex-row pt-2 pb-4">
                        <main>
                            <?= $contents ?>
                        </main>
                    </div>
                </div>
            </div>

            <footer class="footer">
                <div class="container-fluid d-flex justify-content-between">
                    <div class="copyright">
                        2024, made with <i class="fa fa-heart heart text-danger"></i> by <a>Leonzzy</a>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <!-- Scripts -->
    <script src="<?= site_url('assets/kaiadmin/')?>assets/js/core/jquery-3.7.1.min.js"></script>
    <script src="<?= site_url('assets/kaiadmin/')?>assets/js/core/popper.min.js"></script>
    <script src="<?= site_url('assets/kaiadmin/')?>assets/js/core/bootstrap.min.js"></script>
    <script src="<?= site_url('assets/kaiadmin/')?>assets/js/kaiadmin.min.js"></script>
</body>

</html>