<section class="donasi">
        <img src="<?php echo base_url()?>assets/img/coverdonasi.jpg">
</section>
<?= $this->session->flashdata('pesan'); ?>
<section class="teks-toko mt-5">
    <h1>BANTU WUJUDKAN UPAYA KAMI</h1>
    <p>Donasi adalah tulang punggung bagi kegiatan kami.
	Silahkan pilih paket Donasi Anda </p>
</section>

<div class="row-toko text-center ms-l">
		<?php foreach ($donasi as $b) : ?>
			<div class="card-toko mb-3 ms-3" style="width: 40rem;">
				<img src="<?php echo base_url().'/assets/img/upload/'.$b->image ?>" class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title"> Rp. <?php echo number_format($b->paket_donasi, 0, ',', '.') ?></h5>
					<p> <?php echo $b->teks ?> </p>
					<?php echo anchor('User/bayarDonasi/' .$b->id, '<div class="button-green mb-3 mt-3">Donasi Sekarang </div>') ?>
				</div>
			</div>
		<?php endforeach ?>
	</div>