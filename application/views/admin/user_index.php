<!-- Vertically Centered Modal -->
<div id="hilang">
    <?= $this->session->flashdata('alert') ?>
</div>
<div class="col-lg-12 col-md-12">
    <small class="text-light fw-medium"></small>
    <div class="mt-3">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter">
            Tambah User
        </button>

        <!-- Modal -->
        <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <form action="<?= base_url('admin/user/simpan')?>" method="post">
                    <div class=" modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalCenterTitle">Tambah
                                User
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col mb-6">
                                    <label for="nameWithTitle" class="form-label">Nama</label>
                                    <input type="text" id="nameWithTitle" class="form-control" placeholder="Nama"
                                        name="nama" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-6">
                                    <label for="nameWithTitle" class="form-label">Username</label>
                                    <input type="text" id="nameWithTitle" class="form-control" placeholder="Username"
                                        name="username" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-6">
                                    <label for="nameWithTitle" class="form-label">Password</label>
                                    <input type="password" id="nameWithTitle" class="form-control"
                                        placeholder="Password" name="password" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-6">
                                    <label for="nameWithTitle" class="form-label">Level</label>
                                    <select name="level" class="form-control">
                                        <option value="Admin">Admin</option>
                                        <option value="Kontributor">Kontributor
                                        </option>
                                    </select>
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
                        <th>Username</th>
                        <th>Nama</th>
                        <th>Level</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    <?php foreach($user as $aa) {?>
                    <tr>

                        <td><?=$aa['username']?></td>
                        <td><?=$aa['nama']?></td>
                        <td><?=$aa['level']?></td>
                        <td>

                            <a href="<?php echo site_url('admin/user/delete/'.$aa['id_user']);?>"
                                class="btn btn-sm btn-danger"
                                onClick="return confirm('Apakah anda yakin ingin menghapus data ini')"><span
                                    class="fas fa-trash-alt"></span>
                            </a>
                            <button type="button" class="btn btn-sm btn-secondary" data-bs-toggle="modal"
                                data-bs-target="#edit<?=$aa['id_user']?> ">
                                <span class="fas fa-edit"></span>
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="edit<?=$aa['id_user']?>" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <form action="<?= base_url('admin/user/update_data')?>" method="post">
                                        <input type="hidden" name="id_user" value="<?=$aa['id_user']?>">
                                        <div class=" modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalCenterTitle">Perbarui Nama User

                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col mb-6">
                                                        <label for="nameWithTitle" class="form-label">Nama</label>
                                                        <input type="text" id="nameWithTitle" class="form-control"
                                                            value="<?=$aa['nama']?>" name=" nama">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col mb-6">
                                                        <label for="nameWithTitle" class="form-label">Username</label>
                                                        <input type="text" id="nameWithTitle" class="form-control"
                                                            value="<?=$aa['username']?>" name="username" readonly>
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
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>