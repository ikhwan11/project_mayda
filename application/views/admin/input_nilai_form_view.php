<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="container">
                <div class="col-md-6">
                    <?php foreach ($siswa as $smp) : ?>
                        <h3>Input nilai test sdr <?= $smp->nama; ?></h3>

                        <form action="<?= base_url('kelola_test/input_nilai_aksi'); ?>" method="POST">
                            <div class="form-group">
                                <label>No id siswa</label>
                                <input type="text" class="form-control" id="id_siswa" name="id_siswa" value="<?= $smp->id_siswa_smp; ?>">
                            </div>
                            <div class="form-group">
                                <label>Matematika</label>
                                <input type="number" class="form-control" id="nilaiMatematika" name="nilaiMatematika" step="0.01">
                            </div>
                            <div class="form-group">
                                <label>Bahasa Indonesia</label>
                                <input type="number" class="form-control" id="nilaiIndonesia" name="nilaiIndonesia" step="0.01">
                            </div>
                            <div class="form-group">
                                <label>Bahasa Inggris</label>
                                <input type="number" class="form-control" id="nilaiInggris" name="nilaiInggris" step="0.01">
                            </div>
                            <div class="form-group">
                                <label>IPA</label>
                                <input type="number" class="form-control" id="nilaiIpa" name="nilaiIpa" step="0.01">
                            </div>
                            <div class="form-group">
                                <label>IPS</label>
                                <input type="number" class="form-control" id="nilaiIps" name="nilaiIps" step="0.01">
                            </div>
                            <input type="button" class="btn btn-info" id="cek" value="Cek Rata-rata"><br><br>


                            <div class="form-group">
                                <label>Hasil Rata-rata</label>
                                <input type="text" class="form-control" id="demo" name="demo">
                            </div>


                            <button type="submit" class="btn btn-lg btn-success">Submit Nilai</button>

                        </form>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        </div>