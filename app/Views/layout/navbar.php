 <!-- NAVBAR -->
 <nav class="navbar navbar-expand-lg" id="navbar">
     <a class="navbar-brand" href="/ "><img src="/img/logo.webp" alt="logo"></a>
     <div class="container">
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <div class="navbar-nav">
                 <a class="nav-link active" aria-current="page" href="/">Beranda</a>
                 <a class="nav-link" href="/pages/about">Tentang</a>
                 <!-- <a class="nav-link" href="/pages/modul/">Modul</a> -->
                 <a class="nav-link" href="/admin">Kelola</a>
                 <a class="nav-link" href="/user">Ajukan</a>
                 <!-- jika pakai exampp -->
                 <a class="nav-link" href="<?= base_url('/pages/kontak'); ?>">Kontak</a>
                 <?php if (logged_in()) : ?>
                     <a class="btn btn-primary tombol" href="/logout">log-out</a>
                     <a class="nav-link">
                         <span style="margin-left: 100px;"><?= user()->username; ?></span>
                         <img class="img-profile rounded-circle border" style="width: 10%; margin-right: -100px; padding: 0;" src="/img/g-1.webp">
                     </a>
                 <?php else : ?>
                     <a class="btn btn-primary tombol" href="/login">log-in</a>
                 <?php endif; ?>
             </div>
         </div>
     </div>
 </nav>