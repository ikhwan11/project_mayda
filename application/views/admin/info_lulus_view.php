<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="container">

                <div class="col">
                    <h3>Peserta yang lulus test</h3>

                    <table class="table table-bordered table-responsive">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Nama</th>
                                <th>Tanggal lahir</th>
                                <th>nilai rata-rata</th>
                                <th>status</th>
                            </tr>
                        </thead>
                        <?php $no = 1;
                        foreach ($siswa as $smp) : ?>
                            <tbody>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $smp->nama; ?></td>
                                    <td><?= $smp->tanggal_lahir; ?></td>
                                    <td><?= $smp->rata_rata; ?></td>
                                    <?php if ($smp->rata_rata >= '55.00') { ?>
                                        <td><span class="label label-success">Lulus</span></td>
                                    <?php } else { ?>
                                        <td><span class="label label-danger">Tidak lulus</span></td>
                                    <?php } ?>
                                </tr>
                            </tbody>
                        <?php endforeach; ?>
                    </table>

                </div>
            </div>
        </div>