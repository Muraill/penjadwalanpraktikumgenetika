<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="form-box">
        <h1>Form Update dosen</h1>
        <?php if (session()->getFlashdata('failed')) : ?>
            <div class="alert alert-danger gagal-alert" role="alert">
                <?= session()->getFlashdata('failed'); ?>
            </div>
        <?php endif; ?>
        <div class="row">
            <div class="col">
                <form action="/dosen/update/<?= $dosen['id']; ?>" method="post">
                    <?= csrf_field(); ?>
                    <div class="row mb-3">
                        <label for="dosen" class="col-sm-2 col-form-label">Kode Dosen</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputKodeDosen" name="kode_dosen" value="<?= $dosen['kode_dosen']; ?>" autofocus required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="dosen" class="col-sm-2 col-form-label">Nama Dosen</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputNamaDosen" name="nama_dosen" value="<?= $dosen['nama_dosen']; ?>" autofocus required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Save</button>
                    <a href="/dosen" class="btn btn-danger">Batal</a>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(''); ?>