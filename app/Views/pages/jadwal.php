<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="jadwal">
        <div class="row">
            <div class="col">
                <!-- Menampilkan tanggal hari ini dalam format bahasa Indonesia -->
                <h1 class="mt-5">Jadwal Praktikum</h1>
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
                <div class="table-responsive">
                    <a href="/jadwal/tambah" class="btn btn-primary btn-tambah">Tambah</a>
                    <a href="/login" class="btn btn-success btn-kelola">Kelola</a>
                    <a href="/login" class="btn btn-warning btn-ajukan">Ajukan</a>
                    <table class="table table-striped mt-5 border">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Dosen</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Waktu</th>
                                <th scope="col">MataKuliah</th>
                                <th scope="col">Sesi</th>
                                <th scope="col">Ruang</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1 + (5 * ($currentPage - 1)); ?>
                            <?php foreach ($jadwal as $j) : ?>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td><?= $j['nama_dosen']; ?></td>
                                    <td><?= $j['tanggal']; ?></td>
                                    <td><?= $j['waktu']; ?></td>
                                    <td><?= $j['matkul']; ?></td>
                                    <td><?= $j['sesi']; ?></td>
                                    <td><?= $j['ruang']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <?= $pager->links('jadwal', 'custom_page'); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>