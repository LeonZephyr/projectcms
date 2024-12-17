<div id="hilang">
    <?= $this->session->flashdata('alert') ?>
</div>
<form action="<?= base_url('admin/konfigurasi/update') ?>" method="post">
    <div class="container mt-4 ">
        <!-- Tambahkan container untuk responsivitas -->
        <div class="card">
            <div class="card-header">
                <h5 class="card-title" id="modalCenterTitle">Konfigurasi</h5>
            </div>

            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-12">
                        <!-- Kolom melebar penuh -->
                        <label for="judul" class="form-label">Judul Website</label>
                        <input type="text" name="judul" class="form-control" value="<?= $konfig->judul_website ; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12">
                        <!-- Kolom melebar penuh -->
                        <label for="judul" class="form-label">Profile</label>
                        <textarea name="profil_website" class="form-control"><?= $konfig->profil_website ; ?></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12">
                        <!-- Kolom melebar penuh -->
                        <label for="judul" class="form-label">Tiktok</label>
                        <input type="text" name="tiktok" class="form-control" value="<?= $konfig->tiktok ; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12">
                        <!-- Kolom melebar penuh -->
                        <label for="judul" class="form-label">Instagram</label>
                        <input type="text" name="instagram" class="form-control" value="<?= $konfig->instagram ; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12">
                        <!-- Kolom melebar penuh -->
                        <label for="judul" class="form-label">Email</label>
                        <input type="text" name="email" class="form-control" value="<?= $konfig->email ; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12">
                        <!-- Kolom melebar penuh -->
                        <label for="judul" class="form-label">Alamat</label>
                        <input type="text" name="alamat" class="form-control" value="<?= $konfig->alamat ; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12">
                        <!-- Kolom melebar penuh -->
                        <label for="judul" class="form-label">No WA</label>
                        <input type="text" name="no_wa" class="form-control" value="<?= $konfig->no_wa ; ?>">
                        </ </div>
                    </div>

                    <div class="card-footer text-end">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
</form>