<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="form-box">
        <h1>Form Tambah Jadwal</h1>
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
                <form action="/jadwal/save" method="post">
                    <?= csrf_field(); ?>
                    <div class="row mb-3">
                        <label for="dosen" class="col-sm-2 col-form-label">Nama Dosen</label>
                        <div class="col-sm-10">
                            <select class="form-select" aria-label="Default select example" id="inputDosen" name="nama_dosen" required>
                                <option selected></option>
                                <?php foreach ($dosen as $d) : ?>
                                    <?= "<option> $d[nama_dosen]; </option>" ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="matkul" class="col-sm-2 col-form-label">MataKuliah</label>
                        <div class="col-sm-10">
                            <select class="form-select" aria-label="Default select example" id="inputMatkul" name="matkul" required>
                                <option selected></option>
                                <?php foreach ($matkul as $m) : ?>
                                    <?= "<option> $m[nama_matkul]; </option>" ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
                        <div class="col-sm-10">
                            <select class="form-select" aria-label="Default select example" id="inputKelas" name="kelas" required>
                                <option selected></option>
                                <?php foreach ($kelas as $k) : ?>
                                    <?= "<option> $k[nama_kelas]; </option>" ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                        <div class="col-sm-4">
                            <input type="date" class="form-control" id="inputtanggal" name="tanggal" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="waktu" class="col-sm-2 col-form-label">Waktu</label>
                        <div class="col-sm-10">
                            <select class="form-select" aria-label="Default select example" id="inputWaktu" name="waktu" required>
                                <option selected></option>
                                <?php foreach ($sesi as $s) : ?>
                                    <?= "<option> $s[waktu]; </option>" ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="ruang" class="col-sm-2 col-form-label">Ruang</label>
                        <div class="col-sm-10">
                            <select class="form-select" aria-label="Default select example" id="inputruang" name="ruang" required>
                                <option selected></option>
                                <?php foreach ($ruang as $r) : ?>
                                    <?= "<option> $r[nama_ruang]; </option>" ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>




                    <!-- <div class="row mb-3">
                        <label for="dosen" class="col-sm-2 col-form-label">Dosen</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputDosen" name="dosen" autofocus required>
                        </div>
                    </div> -->
                    <!-- <div class="row mb-3">
                        <label for="matkul" class="col-sm-2 col-form-label">MataKuliah</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputMatkul" name="matkul" required>
                        </div> 
                    </div> -->
                    <!-- <div class="row mb-3">
                        <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputkelas" name="kelas" required>
                        </div>
                    </div> -->
                    <!-- <div class="row mb-3">
                        <label for="sesi" class="col-sm-2 col-form-label">sesi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputsesi" name="sesi">
                        </div>
                    </div> -->
                    <!-- <div class="row mb-3">
                        <label for="sesi" class="col-sm-2 col-form-label">Sesi</label>
                        <div class="col-sm-10">
                            <select class="form-select" aria-label="Default select example" id="inputsesi" name="sesi" required>
                                <option selected>--pilih waktu praktikum--</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                    </div> -->
                    <!-- <div class="row mb-3">
                        <label for="waktu" class="col-sm-2 col-form-label">Waktu</label>
                        <div class="col-2">
                            <input type="text" class="form-control" id="inputWaktu" name="waktu" required>
                        </div>
                        <input type="hidden">-
                        <div class="col-2">
                            <input type="time" class="form-control" id="inputWaktu" name="waktu-akhir" required>
                        </div>
                    </div> -->
                    <!-- <div class="row mb-3">
                        <label for="ruang" class="col-sm-2 col-form-label">Ruang</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputRuang" name="ruang" required>
                        </div>
                    </div> -->
                    <button type="submit" class="btn btn-success">Save</button>
                    <button type="reset" class="btn btn-warning">Hapus</button>
                    <a href="/jadwal" class="btn btn-danger">Batal</a>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(''); ?>