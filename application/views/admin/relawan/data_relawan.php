<div id="layoutSidenav_content">
    <main>
        <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Data Relawan
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>ID RELAWAN</th>
                                <th>NAMA</th>
                                <th>EMAIL</th>
                                <th>ALAMAT</th>
                                <th>NOMOR TELEPON</th>
                                <th>TANGGAL LAHIR</th>
                                <th>JADI RELAWAN SEJAK</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            foreach ($relawan as $m) : ?>
                            <tr>
                                <td><?php echo $m->id ?></td>
                                <td><?php echo $m->nama ?></td>
                                <td><?php echo $m->email ?></td>
                                <td><?php echo $m->alamat ?></td>
                                <td><?php echo $m->no_telepon ?></td>
                                <td><?php echo $m->tanggal_lahir ?></td>
                                <td><?php echo date('d F Y', $m->tanggal_input); ?></td>
                                <td><?php echo anchor('admin/detailRelawan/' .$m->id,'<div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div>')?></td>
                                <td><?php echo anchor('admin/hapusRelawan/' .$m->id, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
        </div>
    </main>
</div>
</div>