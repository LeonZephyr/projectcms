<!-- Vertically Centered Modal -->
<div id="hilang">
    <?= $this->session->flashdata('alert') ?>
</div>
<div class="col-lg-12 col-md-12">
    <small class="text-light fw-medium"></small>
    <div class="mt-3">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter">
            Tambah Kategori
        </button>

        <!-- Modal -->
        <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <form action="<?= base_url('admin/kategori/simpan')?>" method="post">
                    <div class=" modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalCenterTitle">Tambah
                                Kategori
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col mb-6">
                                    <label for="nameWithTitle" class="form-label">Nama Kategori</label>
                                    <input type="text" id="nameWithTitle" class="form-control"
                                        placeholder="Nama Kategori" name="nama_kategori" required>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary"
                                data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid pt-4 px-7">
    <h1>Halaman User</h1>
    <div class="card" style="width: 1100px;">
        <div class=" table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Kategori Konten</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    <?php $no=1; foreach($kategori as $aa) {?>
                    <tr>
                        <td><?= $no;?></td>
                        <td><?=$aa['nama_kategori']?></td>
                        <td>

                            <a href="<?php echo site_url('admin/kategori/delete/'.$aa['id_kategori']);?>"
                                class="btn btn-sm btn-danger"
                                onClick="return confirm('Apakah anda yakin ingin menghapus data ini')"><span
                                    class="fas fa-trash-alt"></span>
                            </a>
                            <button type="button" class="btn btn-sm btn-secondary" data-bs-toggle="modal"
                                data-bs-target="#edit<?=$aa['id_kategori']?> ">
                                <span class="fas fa-edit"></span>
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="edit<?=$aa['id_kategori']?>" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <form action="<?= base_url('admin/kategori/update')?>" method="post">
                                        <input type="hidden" name="id_kategori" value="<?=$aa['id_kategori']?>">
                                        <div class=" modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalCenterTitle">Perbarui Kategori</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col mb-6">
                                                        <label for="nameWithTitle" class="form-label">Nama
                                                            Kategori</label>
                                                        <input type="text" id="nameWithTitle" class="form-control"
                                                            value="<?=$aa['id_kategori']?>" name="nama_kategori">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Simpan</button>

                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <?php $no++; } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>