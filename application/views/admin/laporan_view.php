<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="<?php echo base_url('assets/admin') ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/admin') ?>/css/bootstrap-theme.css" rel="stylesheet">
    <title>Laporan Akhir Periode</title>
</head>

<body>
    <section>
        <div class="container">

            <table class="table">
                <thead>
                    <tr>
                        <th><img src="<?= base_url('assets/admin/img/logo.png'); ?>" width="120px">
                            <span>
                                <p>Sekolah Clarrisa Batam</p>
                                <p>RT 1 BLOK B1 NO 77, Buliang, Kec. Batu Aji, Kota Batam, Kepulauan Riau 29424</p>
                            </span>
                        </th>
                        <th>
                            <h3 class="text-right">Laporan akhir periode <?= date('Y'); ?>/<?= date('Y') + 1; ?></h3>
                        </th>
                    </tr>
                </thead>
            </table>
            <!-- tk msuk -->
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th colspan="5">
                            <h3>I. siswa masuk TK</h3>

                        </th>
                    </tr>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Tanggal Lahir</th>
                    </tr>
                </thead>
                <?php $no = 1;
                foreach ($tk as $t) : ?>
                    <tbody>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $t->nama; ?></td>
                            <td><?= $t->jenis_kelamin; ?></td>
                            <td><?= $t->alamat_siswa; ?></td>
                            <td><?= $t->tanggal_lahir; ?></td>
                        </tr>
                    </tbody>
                <?php endforeach; ?>
            </table>

            <!-- sd masuk -->
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th colspan="5">
                            <h3>II. siswa masuk SD</h3>

                        </th>
                    </tr>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Tanggal Lahir</th>
                    </tr>
                </thead>
                <?php $no = 1;
                foreach ($sd as $d) : ?>
                    <tbody>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $d->nama; ?></td>
                            <td><?= $d->jenis_kelamin; ?></td>
                            <td><?= $d->alamat_siswa; ?></td>
                            <td><?= $d->tanggal_lahir; ?></td>
                        </tr>
                    </tbody>
                <?php endforeach; ?>
            </table>

            <!-- smp masuk -->
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th colspan="7">
                            <h3>III. siswa masuk SMP</h3>

                        </th>
                    </tr>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Tanggal Lahir</th>
                        <th>Nilai test</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <?php $no = 1;
                foreach ($smp as $p) : ?>
                    <tbody>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $p->nama; ?></td>
                            <td><?= $p->jenis_kelamin; ?></td>
                            <td><?= $p->alamat_siswa; ?></td>
                            <td><?= $p->tanggal_lahir; ?></td>
                            <td><?= $p->rata_rata; ?></td>

                            <?php if ($p->rata_rata >= '55.00') { ?>
                                <td>Lulus</td>
                            <?php } else { ?>
                                <td>Tidak lulus</td>
                            <?php } ?>

                        </tr>
                    </tbody>
                <?php endforeach; ?>
            </table>

            <!-- sign -->
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="text-center">
                                <div class="card" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Batam, <?= date('d-m-Y'); ?></h5>
                                        <br><br><br><br>
                                        <p>Baharudin, Spd., Mpdi.</p>
                                        <p><u><b>Kepala Sekolah</b></u></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

        </div>
    </section>

    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>