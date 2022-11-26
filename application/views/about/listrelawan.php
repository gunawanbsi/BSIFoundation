<div class="container-toko">
	<div class="row-toko text-center ms-l">
		<?php foreach ($relawan as $b) : ?>
			<div class="card-toko mb-3 ms-3" style="width: 25rem;">
				<img src="<?php echo base_url().'/assets/img/profile/'.$b->image ?>" class="card-img-top" alt="...">
				<div class="card-body" align="left">
					<h5 class="card-title"><?php  echo $b->nama ?></h5>
					<p> <?php echo "Email Relawan : "; echo $b->email ?> </p>
					<p> <?php echo "Alamat : "; echo $b->alamat ?> </p>
					<p> <?php echo "Nomor Telepon : "; echo $b->no_telepon?> </p>
                    <p> <?php echo "Tanggal Lahir : "; echo $b->tanggal_lahir?> </p>
                    <p><?php echo date('d F Y', $b->tanggal_input); ?></p>
				</div>
			</div>
		<?php endforeach ?>
	</div>
</div>