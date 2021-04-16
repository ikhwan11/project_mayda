<section id="main-content">
    <section class="wrapper">
        <div class="row">

            <div class="container">
                <a class="btn btn-info btn-lg" href="<?= base_url('/kelola_user/tambah_user'); ?>" title="lihat detail"><i class="icon_plus"></i> Tambah User</a>
                <div class="col">
                    <h3>Daftar User</h3>
                    <?php echo $this->session->flashdata('pesan') ?>
                    <table class="table table-bordered table-responsive">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Nama</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>aksi</th>
                            </tr>
                        </thead>
                        <?php $no = 1;
                        foreach ($user as $us) : ?>
                            <tbody>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $us->nama; ?></td>
                                    <td><?= $us->username; ?></td>
                                    <td><?= $us->password; ?></td>
                                    <td>
                                        <a class="btn btn-warning" href="<?= base_url('/kelola_user/edit_user/') . $us->id_user; ?>">Edit</a>
                                        <a class="btn btn-danger" href="<?= base_url('kelola_user/hapus_user/') . $us->id_user; ?>">Hapus</a>
                                    </td>
                                </tr>
                            </tbody>
                        <?php endforeach; ?>
                    </table>

                </div>
            </div>
        </div>