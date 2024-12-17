<div id="hilang">
    <?= $this->session->flashdata('alert') ?>
</div>
<div class="card">
    <h5 class="card-header">File input</h5>
    <div class="card-body">
        <form action="<?= base_url('admin/caraousel/simpan') ?>" method="post" enctype="multipart/form-data">
            <div class="col-lg mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" id="judul" name="judul" class="form-control" placeholder="Masukan Judul Foto"
                    required>
            </div>
            <div class="col-lg mb-4">
                <label for="formFile" class="form-label">Pilih Foto dengan
                    Ukuran (1:3)</label>
                <input class="form-control" type="file" name="foto">
            </div>

            <div class="modal-footer">
                <button type="submit" class="btn btn-secondary me-2">Submit</button>
            </div>
        </form>
    </div>
</div>

<!-- Loop Carousel -->
<div class="row mt-12">
    <?php foreach ($caraousel as $aa) { ?>
    <div class="col-lg-4 mb-4 mt-3">
        <!-- Gunakan col-md-6 col-lg-4 agar tetap responsif -->
        <div class="card h-100">
            <img class="card-img-top" src="<?= base_url('assets/upload/caraousel/'.$aa['foto'])?>">
            <div class="card-body">
                <h5 class="card-title"><?=$aa['judul']?></h5>
                <p class="card-text">
                    Some quick example text to build on the card title and make up the bulk of the card's content.
                </p>

                <a href="<?php echo site_url('admin/caraousel/delete/'.$aa['foto']);?>"
                    class="btn btn-sm btn-danger col-lg"
                    onClick="return confirm('Apakah anda yakin ingin menghapus data ini')"><span
                        class="fas fa-trash-alt"></span>
                </a>
            </div>
        </div>
    </div>
    <?php } ?>
</div>