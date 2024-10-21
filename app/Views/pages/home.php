<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="jumbotron mt-4 p-5 bg-primary text-white rounded">
    <div class="container">

    </div>
</div>

<!-- Container -->
<div class="content">
    <div class="container">
        <!-- INFO PANNEL -->
        <div class="row justify-content-center">
            <div class="col-10 info-panel">
                <div class="row">
                    <div class="col-lg">
                        <div class="panel_modul">
                            <a href="/pages/about/"><img src="/img/about-panel.webp" alt="about" class="float-start">
                                <h4>Tentang</h4>
                                <p>Baca selengkapnya tentang kami</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="panel_jadwal">
                            <a href="/pages/jadwal/"><img src="/img/jadwal.webp" alt="jadwal" class="float-start">
                                <h4>Jadwal</h4>
                                </h4>
                                <p>silahkan lihat jadwal pemakaian laboratorium disini</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="panel_kontak">
                            <a href="/pages/kontak/"><img src="/img/contact.png" alt="contact" class="float-start">
                                <h4>KONTAK</h4>
                                <p>kontak kami jika anda mengalami kesulitan</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END INFO PANNEL -->

            <!-- JADWAL TERKINI -->
            <div class="container">
                <div class="jadwal">
                    <div class="row">
                        <div class="col">
                            <!-- Menampilkan tanggal hari ini dalam format bahasa Indonesia -->
                            <h1 class="mt-5">Jadwal Praktikum Hari <?= $terkini; ?></h1>
                            <div class="table-responsive">
                                <table class="table table-striped mt-5 border">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Waktu</th>
                                            <th scope="col">MataKuliah</th>
                                            <th scope="col">Dosen</th>
                                            <th scope="col">Ruang</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($hariini as $h) : ?>
                                            <tr>
                                                <th scope="row"><?= $i++; ?></th>
                                                <td><?= $h['waktu']; ?></td>
                                                <td><?= $h['matkul']; ?></td>
                                                <td><?= $h['nama_dosen']; ?></td>
                                                <td><?= $h['ruang']; ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END JADWAL -->

            <!-- ABOUT -->
            <div class="row about">
                <div class="col-lg-7">
                    <h1>TENTANG KAMI</h1>
                    <p>Laboratorium komputer merupakan salah satu unit penting pelaksana teknis yang mendukung fungsi perguruan tinggi dibidang pelayanan dan pengembangan teknologi informasi baik yang berhubungan dengan sistem perangkat lunak, perangkat keras maupun jaringan. Laboratorium komputer berperan penting dalam meningkatkan kualitas pendidikan serta sebagai penunjang kegiatan praktikum mahasiswa dalam menerapkan teori dan konsep yang didapatkan diperkuliahan.</p>
                    <a href="/pages/about" class="btn btn-primary tombol">More</a>
                </div>
                <div class="col-lg-5">
                    <img src="/img/about.webp" class="d-block w-100" alt="about">
                </div>
            </div>
            <!-- END ABOUT -->


            <!-- GALLERY -->
            <div class="row gallery">
                <div class="col-lg-5 d-flex">
                    <!-- <img src="https://fasilkom.ubharajaya.ac.id/wp-content/uploads/photo-gallery/RUANG_LAB_KOMPUTER_DASAR_3.jpg?bwg=1609007443" alt="gallery" class="img-fluid"> -->
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner carousel-resize">
                            <div class="carousel-item active">
                                <img src="/img/galery/g-1.jpg" class="d-block w-100" alt="1">
                            </div>
                            <div class="carousel-item">
                                <img src="/img/galery/g-2.jpg" class="d-block w-100" alt="2">
                            </div>
                            <div class="carousel-item">
                                <img src="/img/galery/g-3.jpg" class="d-block w-100" alt="3">
                            </div>
                            <!-- <div class="carousel-item">
                                <img src="https://fasilkom.ubharajaya.ac.id/wp-content/uploads/photo-gallery/RUANG_LAB_KOMPUTER_DASAR_3.jpg?bwg=1609007443" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="https://fasilkom.ubharajaya.ac.id/wp-content/uploads/photo-gallery/RUANG_LAB_KOMPUTER_PEMROGRAMAN_2.jpg?bwg=1609007443" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="https://fasilkom.ubharajaya.ac.id/wp-content/uploads/photo-gallery/RUANG_LAB_KOMPUTER_JARINGAN__KEMANAN_1.jpg?bwg=1609007443" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="https://fasilkom.ubharajaya.ac.id/wp-content/uploads/photo-gallery/RUANG_LAB_KOMPUTER_DASAR_1.jpg?bwg=1609007443" class="d-block w-100" alt="...">
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h3>KEGIATAN <span>BELAJAR</span> DAN <span>MENGAJAR</span></h3>
                    <p>Kegiatan praktikum dilakukan untuk meningkatkan pengalaman mahasiswa dari segi praktik.</p>
                    <a href="/pages/gallery" class="btn btn-primary tombol">Gallery</a>
                </div>
            </div>
            <!-- END GALERRY -->


            <!-- PENGURUS -->
            <!-- <section class="pengurus">
                <div class="row justify-content-center">
                    <div class="col_lg-8">
                        <h5>"Belajarlah agar kelak menjadi orang yang sukses"</h5>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-6 justify-content-centers">
                        <figure class="figure">
                            <img src="/img/g-1.webp" class="figure-img img-fluid rounded" alt="pengurus1">
                            <figcaption class="figure-caption">
                                <h5>Raihanda</h5>
                                <p>Mahasiswa</p>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </section> -->
        </div>
    </div>
    <?= $this->endSection(); ?>