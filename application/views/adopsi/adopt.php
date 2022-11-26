<div class="container">
    <div class="button mt-5 mb-5">
        <?php foreach ($adopsi as $d) : ?>
        <?php echo "Total Biaya Adopsi Anda Adalah : Rp. 2.000.000";?>
    </div>
    <br>
    <div class="form-bayar">
        <h2 align="center">ADOPSI <?php echo $d->nama_hewan ?></h2>
        <h2 align="center">Input Data Adopsi</h2>
        <form method="post" action="<?php echo base_url() ?>user/prosesAdopsi">
            <div class="rowpro mb-3 mt-5">
                <label class="text-pad">Nama Lengkap</label>
                <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Lengkap">
            </div>
            <?= form_error('nama', '<small class="danger-text" role="alert">', '</small>'); ?>
            <div class="rowpro mb-3">
                <label class="text-pad">Alamat Lengkap</label>
                <input type="text" class="form-control" name="alamat" placeholder="Masukan Alamat Lengkap">
            </div>
            <?= form_error('alamat', '<small class="danger-text" role="alert">', '</small>'); ?>
            <div class="rowpro mb-3">
                <label class="text-pad">Nomor Telepon</label>
                <input type="text" class="form-control" name="no_telepon" placeholder="Masukan Nomor Telepon">
                <input type="hidden" class="form-control" name="nama_hewan" value="<?php echo $d->nama_hewan; ?>">
                <input type="hidden" class="form-control" name="id_species" value="<?php echo $d->id_species; ?>">
                <input type="hidden" class="form-control" name="harga" value="Rp. 2.000.000">
            </div>
            <?= form_error('no_telepon', '<small class="danger-text" role="alert">', '</small>'); ?>
            <div class="rowpro mb-3">
                <label class="text-pad">Pilih Bank</label>
                <select class="form-control">
                    <option>BCA - XXXXXXXXXX</option>
                    <option>BNI - XXXXXXXXXX</option>
                    <option>BRI - XXXXXXXXXX</option>
                    <option>MANDIRI - XXXXXXXXXX</option>
                </select>
            </div>
            <button type="submit" class="button-green ms-3 mt-5"> Adopsi Sekarang </button>
        </form>
    <?php endforeach ?>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>