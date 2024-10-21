<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="form-box">
        <h1>Form Update Kelas</h1>
        <?php if (session()->getFlashdata('failed')) : ?>
            <div class="alert alert-danger gagal-alert" role="alert">
                <?= session()->getFlashdata('failed'); ?>
            </div>
        <?php endif; ?>
        <div class="row">
            <div class="col">
                <form action="/kelas/update/<?= $kelas['id']; ?>" method="post">
                    <?= csrf_field(); ?>
                    <div class="row mb-3">
                        <label for="kelas" class="col-sm-2 col-form-label">Nama kelas</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputNamaKelas" name="nama_kelas" value="<?= $kelas['nama_kelas']; ?>" autofocus required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Save</button>
                    <a href="/kelas" class="btn btn-danger">Batal</a>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(''); ?>