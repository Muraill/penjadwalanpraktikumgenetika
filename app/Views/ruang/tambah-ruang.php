<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="form-box">
        <h1>Form Tambah Ruang</h1>
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
                <form action="/ruang/save" method="post">
                    <?= csrf_field(); ?>
                    <div class="row mb-3">
                        <label for="ruang" class="col-sm-2 col-form-label">Nama ruang</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputNamaRuang" name="nama_ruang" autofocus required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Save</button>
                    <button type="reset" class="btn btn-warning">Hapus</button>
                    <a href="/ruang" class="btn btn-danger">Batal</a>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(''); ?>