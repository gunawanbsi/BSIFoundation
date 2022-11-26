<div class="container">
    <div class="button mt-5 mb-5">
        <?php $grand_total = 0;
        if ($keranjang = $this->cart->contents())
        {
            foreach ($keranjang as $item)
            {
                $grand_total = $grand_total + $item['subtotal'];
            }
        echo "Total Belanja Anda : Rp. " .number_format($grand_total, 0, ',', '.');
        ?>
    </div>
    <br>
    <div class="form-bayar">
        <h2>Input Alamat Pengiriman dan Pembayaran</h2>
        <form method="post" action="<?php echo base_url() ?>toko/prosesPesanan">
            <div class="rowpro mb-3 mt-5">
                <label class="text-pad">Nama Lengkap</label>
                <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Lengkap">
            </div>
            <div class="rowpro mb-3">
                <label class="text-pad">Alamat Lengkap</label>
                <input type="text" class="form-control" name="alamat" placeholder="Masukan Alamat Lengkap">
            </div>
            <div class="rowpro mb-3">
                <label class="text-pad">Nomor Telepon</label>
                <input type="text" class="form-control" name="no_telepon" placeholder="Masukan Nomor Telepon">
            </div>
            <div class="rowpro mb-3">
                <label class="text-pad">Jasa Pengiriman</label>
                <select class="form-control">
                    <option>JNE</option>
                    <option>TIKI</option>
                    <option>Pos Indonesia</option>
                    <option>Gojek</option>
                    <option>Grab</option>
                </select>
            </div>
            <div class="rowpro mb-3">
                <label class="text-pad">Pilih Bank</label>
                <select class="form-control">
                    <option>BCA - XXXXXXXXXX</option>
                    <option>BNI - XXXXXXXXXX</option>
                    <option>BRI - XXXXXXXXXX</option>
                    <option>MANDIRI - XXXXXXXXXX</option>
                </select>
            </div>
            <button type="submit" class="button-green ms-3 mt-5"> Pesan </button>
        </form>
        <?php }
        else {
            echo "Keranjang Belanja Anda Masih Kosong"; 
        } ?>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>