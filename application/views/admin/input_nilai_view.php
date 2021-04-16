<section id="main-content">
    <section class="wrapper">
        <div class="container">
            <!-- search -->
            <div class="row">
                <div class="col-md-4">
                    <label for="">Cari siswa :</label>
                    <form action="<?= base_url('kelola_test/'); ?>" method="POST">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for..." name="keyword" autocomplete="off" autofocus>
                            <span class="input-group-btn">
                                <input type="submit" class="btn btn-info" value="Cari" name="submit">
                            </span>
                        </div>
                    </form>
                </div>
            </div>
            <!-- search end -->
            <div class="row">
                <div class="col">
                    <h3>Input nilai</h3>
                    <?php echo $this->session->flashdata('pesan') ?>
                    <table class="table table-bordered table-responsive">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Tanggal lahir</th>
                                <th>asal sekolah</th>
                                <th>alamat</th>
                                <th>aksi</th>
                            </tr>
                        </thead>
                        <?php $no = 1;
                        foreach ($siswa as $smp) : ?>
                            <tbody>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $smp['nama']; ?></td>
                                    <td><?= $smp['jenis_kelamin']; ?></td>
                                    <td><?= $smp['tanggal_lahir']; ?></td>

                                    <?php if ($smp['nama_sekolah'] == null) { ?>
                                        <td> - </td>
                                    <?php } else { ?>
                                        <td><?= $smp['nama_sekolah']; ?></td>
                                    <?php } ?>

                                    <td><?= $smp['alamat_siswa']; ?></td>
                                    <td>
                                        <a class="btn btn-info" href="<?= base_url('kelola_test/input_nilai_form/') . $smp['id_siswa_smp']; ?>">Input nilai</a>
                                    </td>
                                </tr>
                            </tbody>
                        <?php endforeach; ?>
                    </table>

                </div>
            </div>
        </div>