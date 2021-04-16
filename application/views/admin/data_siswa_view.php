<section id="main-content">
    <section class="wrapper">
        <div class="row">

            <div class="container">

                <div class="col">
                    <h3>Data Siswa masuk, periode 2021/2022</h3>
                    <?php echo $this->session->flashdata('pesan') ?>
                    <table class="table table-bordered table-responsive">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Nama</th>
                                <th>Tanggal Lahir</th>
                                <th>Alamat</th>
                                <th>Kategori sekolah</th>
                            </tr>
                        </thead>
                        <?php $no = 1;
                        foreach ($siswa as $tk) : ?>
                            <tbody>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $tk->nama; ?></td>
                                    <td><?= $tk->tanggal_lahir; ?></td>
                                    <td><?= $tk->alamat_siswa; ?></td>
                                    <td><?= $tk->kategori; ?></td>
                                </tr>
                            </tbody>
                        <?php endforeach; ?>
                    </table>

                </div>
            </div>
        </div>