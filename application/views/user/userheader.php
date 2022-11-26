<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="with=device-widht, initial scale=1.0">
    <title>BSI Foundation | <?php echo $judul; ?> </title>
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <link href ="<?php echo base_url()?>assets/img/logo.png" rel ="shortcut icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <section class="header"> <!--ini buat daftar menu nya-->
        <nav>
            <div class="nav-menu">
                <a href="<?php echo base_url()?>user/home"><img src="<?php echo base_url()?>assets/img/logo.png"></a>
                <ul>
                    <li><a href="<?php echo base_url().'user/home'?>">BERANDA</a></li>
                    <li class="dropdown"><a href="#">KONSERVASI</a>
                        <ul class="isi-dropdown">
                            <li><a href="<?php echo base_url().'user/orangutan'?>">Orangutan</a></li>
                            <li><a href="<?php echo base_url().'user/komodo'?>">Komodo</a></li>
                            <li><a href="<?php echo base_url().'user/bacusa'?>">Badak Bercula Satu</a></li>
                            <li><a href="<?php echo base_url().'user/harimau'?>">Harimau Sumatera</a></li>
                            <li><a href="<?php echo base_url().'user/gajah'?>">Gajah Sumatera</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#">TENTANG KAMI</a>
                        <ul class="isi-dropdown">
                            <li><a href="<?php echo base_url().'user/visimisi'?>">Visi Misi</a></li>
                            <li><a href="<?php echo base_url().'user/sejarah'?>">Sejarah</a></li>
                            <li><a href="<?php echo base_url().'user/relawan'?>">Relawan</a></li>
                            <li><a href="<?php echo base_url().'user/lokasi'?>">Lokasi Kami</a></li>
                            <li><a href="<?php echo base_url().'user/kontak'?>">Hubungi Kami</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#">PUBLIKASI</a>
                        <ul class="isi-dropdown">
                            <li><a href="<?php echo base_url().'user/berita'?>">Berita Terikini</a></li>
                            <li><a href="<?php echo base_url().'user/galeri'?>">Galeri Foto</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#">BERPARTISIPASI</a>
                        <ul class="isi-dropdown">
                            <li><a href="<?php echo base_url().'user/donasi'?>">Donasi</a></li>
                            <li><a href="<?php echo base_url().'user/adopsi'?>">Adopsi</a></li>
                            <li><a href="<?php echo base_url().'toko'?>">Toko</a></li>
                            <li><a href="<?php echo base_url().'relawan'?>">Jadilah Relawan Kami</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo base_url().'user/donasi'?>">DONASI</a></li>
                    <li class="dropdown1"><img class="img-profile" src="<?= base_url('assets/img/profile/') . $user['image']; ?>">
                        <ul class="isi-dropdown1">
                            <li><a href="<?php echo base_url().'user'?>">Profile Saya</a></li>
                            <li><a href="<?php echo base_url().'autentifikasi/logout'?>">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </section>