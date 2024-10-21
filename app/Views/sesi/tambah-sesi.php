<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="form-box">
        <h1>Form Tambah Sesi</h1>
        <?php if (session()->getFlashdata('failed')) : ?>
            <div class="alert alert-danger gagal-alert" role="alert">
                <?= session()->getFlashdata('failed'); ?>
            </div>
        <?php endif; ?>
        <?php if (session()->getFlashdata('full')) : ?>
            <div class="alert alert-danger gagal-alert" role="alert">
                <?= session()->getFlashdata('full'); ?>
            </div>
        <?php endif; ?>
        <div class="row">
            <div class="col">
                <form action="/sesi/save" method="post">
                    <?= csrf_field(); ?>
                    <div class="row mb-3">
                        <label for="sesi" class="col-sm-2 col-form-label">Sesi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputSesi" name="sesi" autofocus required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="sesi" class="col-sm-2 col-form-label">Waktu</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputWaktu" name="waktu" autofocus required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Save</button>
                    <button type="reset" class="btn btn-warning">Hapus</button>
                    <a href="/sesi" class="btn btn-danger">Batal</a>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(''); ?>