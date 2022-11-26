<div class="container-toko">
	<div class="card" style="width: 40rem;">
        <?php $keranjang = 'Keranjang Belanja : ' .$this->cart->total_items(). ' items' ?>
        <div class="text-toko">
            <?php echo anchor('toko/detailKeranjang', $keranjang, '<div class="button-green"') ?>
        </div>
        <div class="ms-5 mb-3" align="center"><h1>Detail Produk</h1></div>
        <div class="card-body">
        <?php foreach ($barang as $b) : ?>
            <div class="row">
                <img src="<?php echo base_url().'/assets/img/upload/'.$b->gambar ?>" class="card-img-top" alt="...">
                <div class="col-md-x">
                    <table class="table ms-5 mt-xx">
                        <tr>
                            <td>Nama Produk</td>
                            <td><strong><?php echo $b->barang ?></strong</td>
                        </tr>
                        <tr>
                            <td>Keterangan</td>
                            <td><strong><?php echo $b->keterangan ?></strong</td>
                        </tr>
                        <tr>
                            <td>Kategori</td>
                            <td><strong><?php echo $b->kategori ?></strong</td>
                        </tr>
                        <tr>
                            <td>Stok</td>
                            <td><strong><?php echo $b->stok ?></strong</td>
                        </tr>
                        <tr>
                            <td>Harga</td>
                            <td><strong>Rp. <?php echo number_format($b->harga, 0, ',', '.') ?></strong</td>
                        </tr>
                    </table>
                    <?php echo anchor('toko/tambahKeranjang/' .$b->id, '<div class="button-green mb-3 mt-3 ms-5">Tambah ke Keranjang </div>') ?>
                    <?php echo anchor('toko', '<div class="button mb-3 mt-3 ms-5">Kembali </div>') ?>
                </div>
            </div>
        </div>
        <?php endforeach ?>
    </div>
</div>