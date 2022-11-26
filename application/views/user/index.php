<div class="profile-prebox">
            <div class="profile-box">
            <?= $this->session->flashdata('pesan'); ?>
                <div class="row1">
                    <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="card-img" alt="...">
                    <div class="profile-text">
                        <h2><?= $user['nama']; ?></h2><br>
                        <p>Email : <?= $user['email']; ?></p><br>
                        <p>Alamat : <?= $user['alamat'];?></p><br>
                        <p>No Telepon : <?= $user['no_telepon'];?></p><br>
                        <p>Jadi member sejak: <br><b><?= date('d F Y', $user['tanggal_input']); ?></b></p>
                        <br>
                        <a href="<?= base_url('user/ubahprofil'); ?>"class="button-green"> Ubah Profil</a>
                    </div>
                </div>
            </div>
    </div>