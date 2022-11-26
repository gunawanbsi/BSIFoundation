<div class="container-toko">
	<?= $this->session->flashdata('pesan'); ?>
	<?php $keranjang = 'Keranjang Belanja : ' .$this->cart->total_items(). ' items' ?>
	<div class="text-toko">
		<?php echo anchor('toko/detailKeranjang', $keranjang, '<div class="button-green"') ?>
	</div>
	<div class="teks-toko">
		<h1>BSI FOUNDATION SHOP</h1>
		<p>Apakah Anda sedang mencari hadiah yang bisa membantu kami memberikan perawatan sepanjang waktu kepada hewan-hewan konservasi kami yang membutuhkan?
			<br>Anda berada di tempat yang tepat! Selamat datang di Toko BSI Foundation.</p>
	</div>
	<section class="kategori-produk">
		<a href="<?php echo base_url('toko/aksesoris')?>" class="list">
			<figure>
				<img src="<?php echo base_url().'/assets/img/upload/shop1.png'?>">
			</figure>
			<h4><b> AKSESORIS </b></h4>
		</a>
		<a href="<?php echo base_url('toko/pakaian')?>" class="list">
			<figure>
				<img src="<?php echo base_url().'/assets/img/upload/shop2.png'?>">
			</figure>
			<h4><b> PAKAIAN </b></h4>
		</a>
		<a href="<?php echo base_url('toko/useful')?>" class="list">
			<figure>
				<img src="<?php echo base_url().'/assets/img/upload/shop3.png'?>">
			</figure>
			<h4><b> BARANG BERMANFAAT </b></h4>
		</a>
	</section>
	<h2  class="mb-5" align="center">TERPOPULER</h2>
	<div class="row-toko text-center ms-l">
		<?php foreach ($barang as $b) : ?>
			<div class="card-toko mb-3 ms-3" style="width: 20rem;">
				<img src="<?php echo base_url().'/assets/img/upload/'.$b->gambar ?>" class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title"><?php echo $b->barang ?></h5>
					<p> <?php echo $b->keterangan ?> </p>
					<span class="badge"> Rp. <?php echo number_format($b->harga, 0, ',', '.') ?></span>
					<?php echo anchor('toko/tambahKeranjang/' .$b->id, '<div class="button-green mb-3 mt-3">Tambah ke Keranjang </div>') ?>
					<?php echo anchor('toko/detailBarang/' .$b->id, '<div class="button-blue mb-3 mt-3">Detail </div>') ?>
				</div>
			</div>
		<?php endforeach ?>
	</div>
</div>