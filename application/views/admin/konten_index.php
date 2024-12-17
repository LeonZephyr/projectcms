<!-- Vertically Centered Modal -->
<div id="hilang">
    <?= $this->session->flashdata('alert') ?>
</div>
<div class="col-lg-12 col-md-12">
    <small class="text-light fw-medium"></small>
    <div class="mt-3">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter">
            Tambah Konten
        </button>

        <!-- Modal -->
        <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <form action="<?= base_url('admin/konten/simpan') ?>" method="post" enctype="multipart/form-data">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalCenterTitle">Tambah Konten</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="judul" class="form-label">Judul</label>
                                    <input type="text" id="judul" name="judul" class="form-control"
                                        placeholder="Nama Judul" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="id_kategori" class="form-label">Kategori</label>
                                    <select name="id_kategori" class="form-control">
                                        <?php foreach($kategori as $aa) { ?>
                                        <option value="<?= $aa['id_kategori'] ?>"><?= $aa['nama_kategori'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="keterangan" class="form-label">Deskripsi Konten</label>
                                    <textarea id="keterangan" name="keterangan" class="form-control"
                                        placeholder="Deskripsi Konten"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="foto" class="form-label">Foto Konten</label>
                                    <input type="file" name="foto" class="form-control" accept="image/png, image/jpeg">
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
    <h1>Halaman Konten</h1>
    <div class="card" style="width: 1100px;">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul Konten</th>
                        <th>Kategori Konten</th>
                        <th>Tanggal</th>
                        <th>Kreator</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    <?php $no=1; foreach($konten as $aa) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $aa['judul'] ?></td>
                        <td><?= $aa['nama_kategori'] ?></td>
                        <td><?= $aa['tanggal'] ?></td>
                        <td><?= $aa['nama'] ?></td>
                        <td>
                            <a href="<?= base_url('assets/upload/konten/'.$aa['foto']) ?>" target="_blank">
                                <i class="fa-solid fa-magnifying-glass-plus fa-2xl" style="color: #000000;"></i>
                            </a>
                        </td>
                        <td class="d-flex gap-2">
                            <a href="<?= site_url('admin/konten/delete/'.$aa['foto']) ?>" class="btn btn-sm btn-danger"
                                onClick="return confirm('Apakah anda yakin ingin menghapus data ini')">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-sm btn-secondary" data-bs-toggle="modal"
                                data-bs-target="#konten<?= $no; ?>">
                                <i class="fas fa-edit" style="color:white"></i>
                            </button>
                        </td>
                    </tr>
                    <!-- Modal -->
                    <div class="modal fade" id="konten<?= $no; ?>" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <form action="<?= base_url('admin/konten/update') ?>" method="post"
                                enctype="multipart/form-data">
                                <input type="hidden" name="nama_foto" value="<?= $aa['foto'] ?>">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalCenterTitle"><?= $aa['judul'] ?></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>

                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col mb-3">
                                                <label class="form-label">Judul</label>
                                                <input type="text" name="judul" class="form-control"
                                                    value="<?= $aa['judul'] ?>" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col mb-3">
                                                <label class="form-label">Kategori</label>
                                                <select name="id_kategori" class="form-control">
                                                    <?php foreach($kategori as $uu) { ?>
                                                    <option value="<?= $uu['id_kategori'] ?>"
                                                        <?= $uu['id_kategori'] == $aa['id_kategori'] ? 'selected' : '' ?>>
                                                        <?= $uu['nama_kategori'] ?>
                                                    </option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col mb-3">
                                                <label for="keterangan" class="form-label">Deskripsi Konten</label>
                                                <textarea id="keterangan" name="keterangan" class="form-control"
                                                    placeholder="Deskripsi Konten"><?= $aa['keterangan'] ?></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col mb-3">
                                                <label for="foto" class="form-label">Foto Konten</label>
                                                <input type="file" name="foto" class="form-control"
                                                    accept="image/png, image/jpeg">
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
                    <?php $no++; } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>