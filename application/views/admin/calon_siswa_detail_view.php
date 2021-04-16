<section id="main-content">
    <section class="wrapper">
        <div class="container">
            <div class="col-md-2"></div>
            <div class="col-md-8">

                <?php foreach ($calon_siswa as $calon) : ?>
                    <h1>Detail <?= $calon->nama; ?></h1>

                    <?php if ($calon->kategori == 'SMP') { ?>
                        <form action="<?= base_url('calon_siswa/detail_siswa_aksi_smp'); ?>" method="post" role="form">
                            <label>
                                <h4>Identitas Siswa :</h4>
                            </label><br>

                            <div class="form-group">
                                <input type="hidden" name="no_formulir" class="form-control" id="no_formulir" value="<?= $calon->no_formulir; ?>" />
                                <input type="hidden" name="periode" class="form-control" id="periode" value="<?= $calon->periode; ?>" />

                            </div>

                            <div class="form-group">
                                <label for="kategori"> Kategori pendaftaran :</label>
                                <select class="form-control" id="kategori" name="kategori">
                                    <option value="<?= $calon->kategori; ?>"><?= $calon->kategori; ?></option>
                                    <option value="TK">TK</option>
                                    <option value="SD">SD</option>
                                    <option value="SMP">SMP</option>
                                </select>
                                <?php echo form_error('kategori', '<div class="text-small text-danger">', '</div>') ?>

                            </div>


                            <div class="form-group">
                                <label> Nama lengkap:</label>
                                <input type="text" name="nama" class="form-control" id="nama" autofocus autocomplete="off" value="<?= $calon->nama; ?>" />
                                <?php echo form_error('nama', '<div class="text-small text-danger">', '</div>') ?>

                            </div>
                            <div class="form-group">
                                <label for="jk"> Jenis Kelamin :</label>
                                <select class="form-control" id="jk" name="jk">
                                    <option value="<?= $calon->jenis_kelamin; ?>"><?= $calon->jenis_kelamin; ?></option>
                                    <option value="laki-laki">Laki-Laki</option>
                                    <option value="perempuan">Perempuan</option>
                                </select>
                                <?php echo form_error('jk', '<div class="text-small text-danger">', '</div>') ?>

                            </div>

                            <div class="form-group">
                                <label> Tanggal Lahir:</label>
                                <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" value="<?= $calon->tanggal_lahir; ?>" />
                                <?php echo form_error('tanggal_lahir', '<div class="text-small text-danger">', '</div>') ?>
                            </div>

                            <div class="form-group">
                                <label> Agama:</label>
                                <input type="text" name="agama" class="form-control" id="agama" value="<?= $calon->agama; ?>" autocomplete="off" />
                                <?php echo form_error('agama', '<div class="text-small text-danger">', '</div>') ?>
                            </div>

                            <div class="col form-group">
                                <label>Alamat Sekarang:</label>
                                <textarea class="form-control" id="alamat_siswa" name="alamat_siswa" rows="3"><?= $calon->alamat_siswa; ?></textarea>
                                <?php echo form_error('alamat_siswa', '<div class="text-small text-danger">', '</div>') ?>
                            </div>

                            <div class="form-group">
                                <label>
                                    <h6>Sekolah Asal:</h6>
                                    <span>kosongkan jika tidak ada</span><br>
                                </label><br>
                                <div class="container">
                                    <label>Nama Sekolah:</label>
                                    <input type="text" name="nama_sekolah" class="form-control" id="nama_sekolah" value="<?= $calon->nama_sekolah; ?>" autocomplete="off" />

                                    <label>Alamat Sekolah:</label>
                                    <textarea class="form-control" id="alamat_sekolah" name="alamat_sekolah" rows="3"><?= $calon->alamat_sekolah; ?></textarea>
                                </div>

                            </div>
                            <hr>

                            <label>
                                <h4>Identitas Orangtua (Ayah) :</h4>
                            </label>

                            <div class="form-group">
                                <label> Nama Lengkap:</label>
                                <input type="text" name="nama_ayah" class="form-control" id="nama_ayah" value="<?= $calon->nama_ayah; ?>" autocomplete="off" />
                                <?php echo form_error('nama_ayah', '<div class="text-small text-danger">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label> Tanggal lahir:</label>
                                <input type="date" name="tgl_ayah" class="form-control" id="tgl_ayah" value="<?= $calon->tanggal_lahir_ayah; ?>" />
                                <?php echo form_error('tgl_ayah', '<div class="text-small text-danger">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label> Agama:</label>
                                <input type="text" name="agm_ayah" class="form-control" id="agm_ayah" value="<?= $calon->agama_ayah; ?>" autocomplete="off" />
                                <?php echo form_error('agm_ayah', '<div class="text-small text-danger">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label> Pekerjaan:</label>
                                <input type="text" name="pkj_ayah" class="form-control" id="pkj_ayah" value="<?= $calon->pekerjaan_ayah; ?>" autocomplete="off" />
                                <?php echo form_error('pkj_ayah', '<div class="text-small text-danger">', '</div>') ?>
                            </div>
                            <div class="col form-group">
                                <label>Alamat Sekarang:</label>
                                <textarea class="form-control" id="alt_ayah" name="alt_ayah" rows="3"><?= $calon->alamat_ayah; ?></textarea>
                                <?php echo form_error('alt_ayah', '<div class="text-small text-danger">', '</div>') ?>
                            </div>

                            <label>
                                <h4>Identitas Orangtua (Ibu) :</h4>
                            </label>
                            <div class="form-group">
                                <label> Nama Lengkap:</label>
                                <input type="text" name="nama_ibu" class="form-control" id="nama_ibu" value="<?= $calon->nama_ibu; ?>" autocomplete="off" />
                                <?php echo form_error('nama_ibu', '<div class="text-small text-danger">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label> Tanggal lahir:</label>
                                <input type="date" name="tgl_ibu" class="form-control" id="tgl_ibu" value="<?= $calon->tanggal_lahir_ibu; ?>" />
                                <?php echo form_error('tgl_ibu', '<div class="text-small text-danger">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label> Agama:</label>
                                <input type="text" name="agm_ibu" class="form-control" id="agm_ibu" value="<?= $calon->agama_ibu; ?>" autocomplete="off" />
                                <?php echo form_error('agm_ibu', '<div class="text-small text-danger">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label> Pekerjaan:</label>
                                <input type="text" name="pkj_ibu" class="form-control" id="pkj_ibu" value="<?= $calon->pekerjaan_ibu; ?>" autocomplete="off" />
                                <?php echo form_error('pkj_ibu', '<div class="text-small text-danger">', '</div>') ?>
                            </div>
                            <div class="col form-group">
                                <label>Alamat Sekarang:</label>
                                <textarea class="form-control" id="alt_ibu" name="alt_ibu" rows="3"><?= $calon->alamat_ibu; ?></textarea>
                                <?php echo form_error('alt_ibu', '<div class="text-small text-danger">', '</div>') ?>
                            </div>

                            <div class="text-center"><button type="submit" class="btn btn-info btn-lg">Konfirmasi pendaftaran</button></div>

                        <?php } else { ?>

                            <form action="<?= base_url('calon_siswa/detail_siswa_aksi'); ?>" method="post" role="form">
                                <label>
                                    <h4>Identitas Siswa :</h4>
                                </label><br>

                                <div class="form-group">
                                    <input type="hidden" name="no_formulir" class="form-control" id="no_formulir" value="<?= $calon->no_formulir; ?>" />

                                </div>

                                <div class="form-group">
                                    <label for="kategori"> Kategori pendaftaran :</label>
                                    <select class="form-control" id="kategori" name="kategori">
                                        <option value="<?= $calon->kategori; ?>"><?= $calon->kategori; ?></option>
                                        <option value="TK">TK</option>
                                        <option value="SD">SD</option>
                                        <option value="SMP">SMP</option>
                                    </select>
                                    <?php echo form_error('kategori', '<div class="text-small text-danger">', '</div>') ?>

                                </div>


                                <div class="form-group">
                                    <label> Nama lengkap:</label>
                                    <input type="text" name="nama" class="form-control" id="nama" autofocus autocomplete="off" value="<?= $calon->nama; ?>" />
                                    <?php echo form_error('nama', '<div class="text-small text-danger">', '</div>') ?>

                                </div>
                                <div class="form-group">
                                    <label for="jk"> Jenis Kelamin :</label>
                                    <select class="form-control" id="jk" name="jk">
                                        <option value="<?= $calon->jenis_kelamin; ?>"><?= $calon->jenis_kelamin; ?></option>
                                        <option value="laki-laki">Laki-Laki</option>
                                        <option value="perempuan">Perempuan</option>
                                    </select>
                                    <?php echo form_error('jk', '<div class="text-small text-danger">', '</div>') ?>

                                </div>

                                <div class="form-group">
                                    <label> Tanggal Lahir:</label>
                                    <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" value="<?= $calon->tanggal_lahir; ?>" />
                                    <?php echo form_error('tanggal_lahir', '<div class="text-small text-danger">', '</div>') ?>
                                </div>

                                <div class="form-group">
                                    <label> Agama:</label>
                                    <input type="text" name="agama" class="form-control" id="agama" value="<?= $calon->agama; ?>" autocomplete="off" />
                                    <?php echo form_error('agama', '<div class="text-small text-danger">', '</div>') ?>
                                </div>

                                <div class="col form-group">
                                    <label>Alamat Sekarang:</label>
                                    <textarea class="form-control" id="alamat_siswa" name="alamat_siswa" rows="3"><?= $calon->alamat_siswa; ?></textarea>
                                    <?php echo form_error('alamat_siswa', '<div class="text-small text-danger">', '</div>') ?>
                                </div>

                                <div class="form-group">
                                    <label>
                                        <h6>Sekolah Asal:</h6>
                                        <span>kosongkan jika tidak ada</span><br>
                                    </label><br>
                                    <div class="container">
                                        <label>Nama Sekolah:</label>
                                        <input type="text" name="nama_sekolah" class="form-control" id="nama_sekolah" value="<?= $calon->nama_sekolah; ?>" autocomplete="off" />

                                        <label>Alamat Sekolah:</label>
                                        <textarea class="form-control" id="alamat_sekolah" name="alamat_sekolah" rows="3"><?= $calon->alamat_sekolah; ?></textarea>
                                    </div>

                                </div>
                                <hr>

                                <label>
                                    <h4>Identitas Orangtua (Ayah) :</h4>
                                </label>

                                <div class="form-group">
                                    <label> Nama Lengkap:</label>
                                    <input type="text" name="nama_ayah" class="form-control" id="nama_ayah" value="<?= $calon->nama_ayah; ?>" autocomplete="off" />
                                    <?php echo form_error('nama_ayah', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                                <div class="form-group">
                                    <label> Tanggal lahir:</label>
                                    <input type="date" name="tgl_ayah" class="form-control" id="tgl_ayah" value="<?= $calon->tanggal_lahir_ayah; ?>" />
                                    <?php echo form_error('tgl_ayah', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                                <div class="form-group">
                                    <label> Agama:</label>
                                    <input type="text" name="agm_ayah" class="form-control" id="agm_ayah" value="<?= $calon->agama_ayah; ?>" autocomplete="off" />
                                    <?php echo form_error('agm_ayah', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                                <div class="form-group">
                                    <label> Pekerjaan:</label>
                                    <input type="text" name="pkj_ayah" class="form-control" id="pkj_ayah" value="<?= $calon->pekerjaan_ayah; ?>" autocomplete="off" />
                                    <?php echo form_error('pkj_ayah', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                                <div class="col form-group">
                                    <label>Alamat Sekarang:</label>
                                    <textarea class="form-control" id="alt_ayah" name="alt_ayah" rows="3"><?= $calon->alamat_ayah; ?></textarea>
                                    <?php echo form_error('alt_ayah', '<div class="text-small text-danger">', '</div>') ?>
                                </div>

                                <label>
                                    <h4>Identitas Orangtua (Ibu) :</h4>
                                </label>
                                <div class="form-group">
                                    <label> Nama Lengkap:</label>
                                    <input type="text" name="nama_ibu" class="form-control" id="nama_ibu" value="<?= $calon->nama_ibu; ?>" autocomplete="off" />
                                    <?php echo form_error('nama_ibu', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                                <div class="form-group">
                                    <label> Tanggal lahir:</label>
                                    <input type="date" name="tgl_ibu" class="form-control" id="tgl_ibu" value="<?= $calon->tanggal_lahir_ibu; ?>" />
                                    <?php echo form_error('tgl_ibu', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                                <div class="form-group">
                                    <label> Agama:</label>
                                    <input type="text" name="agm_ibu" class="form-control" id="agm_ibu" value="<?= $calon->agama_ibu; ?>" autocomplete="off" />
                                    <?php echo form_error('agm_ibu', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                                <div class="form-group">
                                    <label> Pekerjaan:</label>
                                    <input type="text" name="pkj_ibu" class="form-control" id="pkj_ibu" value="<?= $calon->pekerjaan_ibu; ?>" autocomplete="off" />
                                    <?php echo form_error('pkj_ibu', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                                <div class="col form-group">
                                    <label>Alamat Sekarang:</label>
                                    <textarea class="form-control" id="alt_ibu" name="alt_ibu" rows="3"><?= $calon->alamat_ibu; ?></textarea>
                                    <?php echo form_error('alt_ibu', '<div class="text-small text-danger">', '</div>') ?>
                                </div>


                                <div class="text-center"><button type="submit" class="btn btn-success btn-lg">Konfirmasi pendaftaran</button></div>
                            <?php } ?>

                        <?php endforeach; ?>
                            </form>
            </div>

        </div>