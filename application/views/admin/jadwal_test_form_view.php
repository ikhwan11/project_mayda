<section id="main-content">
    <section class="wrapper">
        <div class="container">
            <h1>form buat jadwal test tertulis masuk SMP</h1>
            <?php echo $this->session->flashdata('pesan') ?><br>
            <?php if ($jadwal == null) { ?>
                <form method="POST" action="<?= base_url('kelola_test/unggah_aksi'); ?>" role="form" class="col-md-10">
                    <div class="form-group ">
                        <label class="col-lg-2 control-label">Nama admin</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control mb-2" id="nama" name="nama" value="<?php echo $this->session->userdata('nama') ?>" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label ">tanggal test</label>
                        <div class="col-lg-10">
                            <input type="date" class="form-control" id="tanggal_test" name="tanggal_test" autofocus>
                            <?php echo form_error('tanggal_test', '<div class="text-small text-danger">', '</div>') ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">jam </label>
                        <div class="col-lg-10">
                            <input type="time" class="form-control" id="jam" name="jam">
                            <?php echo form_error('jam', '<div class="text-small text-danger">', '</div>') ?>
                        </div>

                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">tempat</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="tempat" name="tempat" autocomplete="off">
                            <?php echo form_error('tempat', '<div class="text-small text-danger">', '</div>') ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">keterangan</label>
                        <div class="col-lg-10">
                            <textarea type="text" class="form-control" id="keterangan" name="keterangan" rows="3"></textarea>
                            <?php echo form_error('keterangan', '<div class="text-small text-danger">', '</div>') ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </div>
                </form>
            <?php } else { ?>
                <form method="POST" action="<?= base_url('kelola_test/edit_jadwal_aksi'); ?>" role="form" class="col-md-10">
                    <?php foreach ($jadwal as $jad) : ?>
                        <div class="form-group ">
                            <label class="col-lg-2 control-label">Nama admin</label>
                            <div class="col-lg-10">
                                <input type="hidden" class="form-control mb-2" id="id_jadwal" name="id_jadwal" value="<?= $jad->id_jadwal; ?>">
                                <input type="text" class="form-control mb-2" id="nama" name="nama" value="<?= $jad->nama; ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-2 control-label ">tanggal test</label>
                            <div class="col-lg-10">
                                <input type="date" class="form-control" id="tanggal_test" name="tanggal_test" value="<?= $jad->tanggal_test; ?>">
                                <?php echo form_error('tanggal_test', '<div class="text-small text-danger">', '</div>') ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-2 control-label">jam </label>
                            <div class="col-lg-10">
                                <input type="time" class="form-control" id="jam" name="jam" value="<?= $jad->jam; ?>">
                                <?php echo form_error('jam', '<div class="text-small text-danger">', '</div>') ?>
                            </div>

                        </div>

                        <div class="form-group">
                            <label class="col-lg-2 control-label">tempat</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="tempat" name="tempat" autocomplete="off" value="<?= $jad->tempat; ?>">
                                <?php echo form_error('tempat', '<div class="text-small text-danger">', '</div>') ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">keterangan</label>
                            <div class="col-lg-10">
                                <textarea type="text" class="form-control" id="keterangan" name="keterangan" rows="3"><?= $jad->keterangan; ?></textarea>
                                <?php echo form_error('keterangan', '<div class="text-small text-danger">', '</div>') ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button type="submit" class="btn btn-success">Update</button>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </form>
            <?php } ?>

        </div>