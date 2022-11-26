<div class="container-keranjang">
    <div class="text-keranjang mb-5 ms-5">
        <h1> Keranjang Belanja </h1>
    </div>
    <table class ="table table-bordered table-striped table-hover">
        <tr>
            <th>Nomor</th>
            <th>Nama Produk</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Subtotal</th>
        </tr>

        <?php $no=1;
        foreach ($this->cart->contents() as $items) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $items['name'] ?></td>
                <td><?php echo $items['qty'] ?></td>
                <td>Rp. <?php echo number_format($items['price'], 0, ',', '.') ?></td>
                <td>Rp. <?php echo number_format($items['subtotal'], 0, ',', '.') ?></td>
            </tr>
        <?php endforeach ?>
        <tr>
            <td colspan="3"></td>
            <td align="center"> Jumlah Total : </td>
            <td>Rp. <?php echo number_format($this->cart->total(), 0, ',', '.') ?></td>
        </tr>
    </table>
    <div class="aksi">
        <a href = "<?php echo base_url('toko/hapusKeranjang') ?>" class="button"> Hapus Keranjang </a>
        <a href = "<?php echo base_url('toko') ?>" class="button-blue"> Lanjutkan Belanja </a>
        <a href = "<?php echo base_url('toko/pembayaran') ?>" class="button-green"> Pembayaran </a>
    </div>
</div>
