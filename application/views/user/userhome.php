<section class="container"> <!-- ini bagian gambar bergeser sama teks nya -->
        <div id="carouselExampleCaptions" class="mycarousel carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3800">
                <img src="<?php echo base_url()?>assets/img/orangutan.jpg" class="d-block w-100 h-x" alt="...">
                <div class="carousel-caption d-md-block">
                        <a href="<?php echo base_url().'toko'?>" class="button-green">KUNJUNGI TOKO KAMI</a>
                        <h1>BELI MERCHENDISE MENARIK KAMI</h1>
                        <h4>Sebagian hasil dari penjualan merchendise dialokasikan untuk kegiatan konservasi</h4>
                </div>
                </div>
                <div class="carousel-item" data-bs-interval="3800">
                <img src="<?php echo base_url()?>assets/img/komodo.jpg" class="d-block w-100 h-x" alt="...">
                <div class="carousel-caption  d-md-block">
                    <a href="<?php echo base_url().'relawan/dafrel'?>" class="button-green">DAFTAR RELAWAN</a>
                        <h1>JADILAH PAHLAWAN KONSERVASI</h1>
                        <h4>Jadilah pahlawan konservasi dengan cara menjadi relawan kami</h4>
                </div>
                </div>
                <div class="carousel-item" data-bs-interval="3800">
                <img src="<?php echo base_url()?>assets/img/badak.jpg" class="d-block w-100 h-x" alt="...">
                <div class="carousel-caption  d-md-block">
                <a href="<?php echo base_url().'user/donasi'?>" class="button-green">DONASI SEKARANG</a>
                        <h1>BANTU WUJUDKAN UPAYA KAMI</h1>
                        <h4> Donasi adalah tulang punggung bagi kegiatan kami.</h4>
                </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <section class="sejarah"> <!--- ini bagian teks kotak kisah kami -->
        <div class="teks-kisah">
        <h1>KISAH KAMI</h1>
        <p>BSI Fondation dibentuk untuk upaya melestarikan satwa-satwa yang dilindungi<br>
        beserta habitatnya. Diharapkan, kedepan nya lembaga kami dapat bekerja sama dengan<br>
        masyarakat sekitar wilayah konservasi, Pemerintah Indonesia dan lembaga-lembaga<br>
        Mitra Internasional. Ketahui lebih jauh mengenai Visi Misi, Sejarah dan Relawan kami.</p>
        <a href="#" class="button-green mt-5">TENTANG KAMI</a>
        </div>
    </section>
    <section class="konservasi"> <!--- ini bagian dari hewan hewan konservasi nya -->
        <h1>KONSERVASI SATWA-SATWA</h1>
        <p>Saat ini, BSI Fondation fokus berfokus untuk menjaga kelestarian<br>
            satwa-satwa dilindungi beserta habitatnya. Ada 5 Spesies yang berada di pengawasan BSI Fondation</p>
        <div class="row">
            <div class="kons-kolom">
                <img src="<?php echo base_url()?>assets/img/orangutan2.jpg">
                <div class="layer">
                    <a href="<?php echo base_url().'user/orangutan'?>"><h3>ORANGUTAN</h3></a>
                </div>
            </div>
            <div class="kons-kolom">
                <img src="<?php echo base_url()?>assets/img/komodo2.jpg">
                <div class="layer">
                    <a href="<?php echo base_url().'user/komodo'?>"><h3>KOMODO</h3></a>
                </div>
            </div>
            <div class="kons-kolom">
                <img src="<?php echo base_url()?>assets/img/bacusa.jpg">
                <div class="layer">
                    <a href="<?php echo base_url().'user/bacusa'?>"><h3>BADAK BERCULA SATU</h3></a>
                </div>
            </div>
            <div class="kons-kolom">
                <img src="<?php echo base_url()?>assets/img/harimau.jpg">
                <div class="layer">
                    <a href="<?php echo base_url().'user/harimau'?>"><h3>HARIMAU SUMATERA</h3></a>
                </div>
            </div>
            <div class="kons-kolom">
                <img src="<?php echo base_url()?>assets/img/gajah.jpg">
                <div class="layer">
                    <a href="<?php echo base_url().'user/gajah'?>"><h3>GAJAH SUMETERA</h3></a>
                </div>
            </div>
        </div>
    </section>