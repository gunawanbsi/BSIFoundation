<section class="dafrel">
        <div class="login-box">
            <h1>Daftar Menjadi Relawan</h1>
            <form method="post" action="<?= base_url('relawan/dafrel'); ?>">
                <div class="input-login">
                    <input type="text" id="nama" placeholder="Nama Lengkap" name ="nama" value="<?= set_value('nama'); ?>">
                </div>
                <?= form_error('nama', '<small class="danger-text">', '</small>'); ?>
                <div class="input-login">
                    <input type="text" placeholder="Alamat Email" id="email" name="email" value="<?= set_value('email'); ?>">
                </div>
                <?= form_error('email', '<small class="danger-text">', '</small>'); ?>
                <div class="input-login">
                    <input type="text" placeholder="Alamat" id="alamat" name="alamat" value="<?= set_value('alamat'); ?>">
                </div>
                <?= form_error('alamat', '<small class="danger-text">', '</small>'); ?>
                <div class="input-login">
                    <input type="text" placeholder="Nomor Telepon" id="no_telepon" name="no_telepon" value="<?= set_value('no_telepon'); ?>">
                </div>
                <?= form_error('no_telepon', '<small class="danger-text">', '</small>'); ?>
                <div class="input-login">
                    <input type="text" placeholder="Tanggal Lahir" id="tanggal_lahir" name="tanggal_lahir" value="<?= set_value('tanggal_lahir'); ?>">
                </div>
                <?= form_error('tanggal_lahir', '<small class="danger-text">', '</small>'); ?>
                <button type="submit" class="button-green ms-x">Daftar Menjadi Relawan</a></button>
            </form>
        </div>
    </section>
    