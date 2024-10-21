<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="box">
        <div class="row">
            <div class="col">
                <h1 class="mt-5">Tambah MataKuliah</h1>
                <!-- <form action="" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search" name="keyword">
                        <button class="btn btn-outline-secondary lg-3" type="submit" name="submit">Cari</button>
                    </div>
                </form> -->
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
                    <a href="/matkul/tambah" class="btn btn-primary btn-tambah">Tambah</a>
                    <table class="table table-striped mt-5 border">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama MataKuliah</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1 + (5 * ($currentPage - 1)); ?>
                            <?php foreach ($matkul as $m) : ?>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td><?= $m['nama_matkul']; ?></td>
                                    <td>
                                        <a href="/matkul/edit/<?= $m['id']; ?>" class="btn btn-warning btn-sm">Update</a>
                                        <form action="/matkul/delete/<?= $m['id']; ?>" method="post" class="d-inline">
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
                    <?= $pager->links('matkul', 'custom_page'); ?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?= $this->endSection(); ?>