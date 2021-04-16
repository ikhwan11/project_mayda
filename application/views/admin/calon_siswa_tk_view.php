<section id="main-content">
    <section class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3>Data formulir masuk</h3>
                    <table class="table table-bordered table-responsive">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Nama</th>
                                <th>Tanggal lahir</th>
                                <th>asal sekolah</th>
                                <th>alamat</th>
                                <th>aksi</th>
                            </tr>
                        </thead>
                        <?php $no = 1;
                        foreach ($formulir as $tk) : ?>
                            <tbody>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $tk->nama; ?></td>
                                    <td><?= $tk->tanggal_lahir; ?></td>

                                    <?php if ($tk->nama_sekolah == null) { ?>
                                        <td> - </td>
                                    <?php } else { ?>
                                        <td><?= $tk->nama_sekolah; ?></td>
                                    <?php } ?>

                                    <td><?= $tk->alamat_siswa; ?></td>
                                    <td>
                                        <a class="btn btn-info" href="<?= base_url('/calon_siswa/detail_siswa/') . $tk->no_formulir; ?>" title="lihat detail">Detail</a>
                                    </td>
                                </tr>
                            </tbody>
                        <?php endforeach; ?>
                    </table>

                </div>
            </div>
        </div>