<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="box">
        <div class="row">
            <div class="col">
                <h1 class="mt-5">Tambah Sesi</h1>
            </div>
        </div>
        <!-- SEARCH -->
        <div class="row">
            <div class="col">
                <form action="" method="post" class="row g-3 justify-content-end search">
                    <div class="col-lg-auto  justify-content-end">
                        <input class="form-control me-2 rounded" type="text" placeholder="Search" aria-label="Search" name="keyword">
                    </div>
                    <div class="col-lg-auto justify-content-end d-flex">
                        <button class="btn btn-outline-primary" type="submit" name="submit">Search</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <?php if (session()->getFlashdata('pesan')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?= session()->getFlashdata('pesan'); ?>
                    </div>
                <?php endif; ?>
                <div class="table-responsive">
                    <a href="/sesi/tambah" class="btn btn-primary btn-tambah">Tambah</a>
                    <table class="table table-striped mt-5 border">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Sesi</th>
                                <th scope="col">Waktu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1 + (5 * ($currentPage - 1)); ?>
                            <?php foreach ($sesi as $s) : ?>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td><?= $s['sesi']; ?></td>
                                    <td><?= $s['waktu']; ?></td>
                                    <td>
                                        <a href="/sesi/edit/<?= $s['id']; ?>" class="btn btn-warning btn-sm">Update</a>
                                        <form action="/sesi/delete/<?= $s['id']; ?>" method="post" class="d-inline">
                                            <?= csrf_field(); ?>
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <!-- Paginasi -->
                    <?= $pager->links('sesi', 'custom_page'); ?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?= $this->endSection(); ?>