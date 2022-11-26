<?= $this->session->flashdata('pesan'); ?>
<section class="adopsi">
    <h1>ADOPSI</h1>
</section>
<div class="container-toko">
	<div class="row-toko text-center ms-l">
		<?php foreach ($hewan as $b) : ?>
			<div class="card-toko mb-3 ms-3" style="width: 20rem;">
				<img src="<?php echo base_url().'/assets/img/upload/'.$b->image ?>" class="card-img-top" alt="...">
				<div class="card-body" align="left">
					<h5 class="card-title"><?php echo $b->nama_hewan ?></h5>
					<p> <?php echo "Jenis Kelamin : "; echo $b->jenis_kelamin ?> </p>
					<p> <?php echo "ID Species : "; echo $b->id_species?> </p>
                    <p> <?php echo "Tanggal Lahir : "; echo $b->tanggal_lahir ?> </p>
					<?php echo anchor('user/adopsiHewan/' .$b->id, '<div class="button-green mb-3 mt-3"> Adopsi Sekarang </div>') ?>
				</div>
			</div>
		<?php endforeach ?>
	</div>
</div>