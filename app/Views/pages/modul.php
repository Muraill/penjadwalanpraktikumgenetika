<?php $hariIni = new DateTime(); ?>
<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="modul">
        <div class="row">
            <div class="col">
                <h1>MODUL PRAKTIKUM <br> UNIVERSITAS BHAYANGKARA JAKARTA RAYA <br> FAKULTAS ILMU KOMPUTER</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form action="" method="get" autocomplete="off" class="row g-3 justify-content-end search">
                    <div class="col-lg-auto justify-content-end">
                        <input class="form-control me-2 rounded" type="search" placeholder="Search" aria-label="Search">
                    </div>
                    <div class="col-lg-auto justify-content-end">
                        <button class="btn btn-outline-primary" type="submit">Search</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="table-responsive">
                    <table class="table table-striped mt-5 border">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Matkul</th>
                                <th scope="col">Kelas</th>
                                <th scope="col">Dosen</th>
                                <th scope="col">Sesi</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Bahasa Inggris</td>
                                <td>TF6A3</td>
                                <td>Mrs fera</td>
                                <td>Sesi 1</td>
                                <td><a href="" class="btn btn-primary">Download</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>