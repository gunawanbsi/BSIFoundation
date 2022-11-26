<div class="container-toko">
	<?php $keranjang = 'Keranjang Belanja : ' .$this->cart->total_items(). ' items' ?>
	<div class="text-toko">
		<?php echo anchor('toko/detailKeranjang', $keranjang, '<div class="button-green"') ?>
	</div>
    <section class="kategori-produk">
		<a href="<?php echo base_url('toko/aksesoris')?>" class="list">
			<figure>
				<img src="<?php echo base_url().'/assets/img/upload/shop1.png'?>">
			</figure>
			<h4><b> AKSESORI </b></h4>
		</a>
		<a href="<?php echo base_url('toko/pakaian')?>" class="list">
			<figure>
				<img src="<?php echo base_url().'/assets/img/upload/shop2.png'?>">
			</figure>
			<h4><b> Pakaian </b></h4>
		</a>
		<a href="<?php echo base_url('toko/useful')?>" class="list">
			<figure>
				<img src="<?php echo base_url().'/assets/img/upload/shop3.png'?>">
			</figure>
			<h4><b> BARANG BERMANFAAT </b></h4>
		</a>
	</section>
    <div class="row-toko text-center ms-l">
		<?php foreach ($aksesoris as $k) : ?>
			<div class="card-toko mb-3 ms-3" style="width: 20rem;">
				<img src="<?php echo base_url().'/assets/img/upload/'.$k->gambar ?>" class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title"><?php echo $k->barang ?></h5>
					<p> <?php echo $k->keterangan ?> </p>
					<span class="badge"> Rp. <?php echo number_format($k->harga, 0, ',', '.') ?></span>
					<?php echo anchor('toko/tambahKeranjang/' .$k->id, '<div class="button-green mb-3 mt-3">Tambah ke Keranjang </div>') ?>
					<?php echo anchor('toko/detailBarang/' .$k->id, '<div class="button-blue mb-3 mt-3">Detail </div>') ?>
				</div>
			</div>
		<?php endforeach ?>
	</div>
</div>