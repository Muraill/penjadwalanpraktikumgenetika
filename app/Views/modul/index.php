<?php $hariIni = new DateTime(); ?>
<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-5">Jadwal Praktikum Hari <?= $hariIni->format('D M Y'); ?></h1>
            <!-- <div class="card-header">
                <form action="" method="get" autocomplete="off">
                    <div class="float-left">
                        <input type="text" name="keyword" value="" class="form-control" style="width: 155px;" placeholder="Search">
                    </div>
                    <div class="float-right me-2">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
                    </div>
                </form>
            </div> -->
            <form action="" method="get" autocomplete="off" class="row g-3 justify-content-end search">
                <div class="col-auto">
                    <input class="form-control me-2 justify-content-center rounded" type="search" placeholder="Search" aria-label="Search">
                </div>
                <div class="col-auto">
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                </div>
            </form>
            <table class="table table-striped mt-5 border">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Sampul</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Dosen</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td><img src="/img/cover.jpg" alt="" class="sampul"></td>
                        <td>Bahasa Inggris</td>
                        <td>Mrs feras</td>
                        <td><a href="" class="btn btn-primary">Download</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>