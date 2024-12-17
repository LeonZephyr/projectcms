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
    <?php require_once('navbar.php') ; ?>


    <!-- Detail Start -->
    <div class="container py-5 d-flex">
        <div class="row pt-5">
            <div class="col-lg-12">
                <div class="d-flex flex-column text-left mb-3">
                    <p class="section-title pr-5"><span class="pr-2">Blog Detail Page</span></p>
                    <h1 class="mb-3"> <?= $konten->judul; ?> </h1>
                    <div class="d-flex">
                        <p class="mr-3"><i class="fa fa-user text-primary"></i> <?= $konten->nama; ?></p>
                        <p class="mr-3"><i class="fa fa-folder text-primary"></i> <?= $konten->nama_kategori; ?></p>
                    </div>
                </div>
                <div class="mb-5">
                    <img class="img-fluid rounded w-100 mb-4"
                        src=" <?= base_url('assets/upload/konten/'.$konten->foto) ?>" />
                    <?= $konten->keterangan ; ?>

                </div>
            </div>
        </div>

        <div class="col-lg-3 mt-5 mt-lg-0">

            <!-- Category List -->
            <div class="mb-5">
                <h2 class="mb-4">Categories</h2>
                <ul class="list-group list-group-flush">
                    <?php foreach($kategori as $ii) {?>
                    <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                        <a href="<?= base_url('home/kategori/'.$ii['id_kategori']) ?>"><?php echo $ii['nama_kategori'] ?>
                        </a></a>
                    </li>
                    <?php } ?>
                </ul>
            </div>


        </div>


    </div>
    </div>
    <!-- Detail End -->

    <?php require_once('footer_page.php') ; ?>
</body>

</html>