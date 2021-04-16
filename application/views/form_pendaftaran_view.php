 <!-- ======= Contact Section ======= -->
 <section class="contact mt-5">
     <div class="container">
         <div class="row">
             <div class="col">
                 <h1>Gabung bersama kami sekarang</h1>
                 <?php echo $this->session->flashdata('pesan') ?>
                 <form action="<?= base_url('home/pendaftaran_aksi'); ?>" method="post" role="form">
                     <label>
                         <h4>Identitas Siswa :</h4>
                     </label><br>

                     <div class="form-group col-md-6">
                         <label for="kategori"> Kategori pendaftaran :</label>
                         <select class="form-control" id="kategori" name="kategori">
                             <option value="">--- Pilih kategori ---</option>
                             <option value="TK">TK</option>
                             <option value="SD">SD</option>
                             <option value="SMP">SMP</option>
                         </select>
                         <?php echo form_error('kategori', '<div class="text-small text-danger">', '</div>') ?>

                     </div>


                     <div class="form-group col-md-6">
                         <label> Nama lengkap:</label>
                         <input type="hidden" name="periode" class="form-control" id="periode" value="<?= date('Y'); ?>/<?= date('Y') + 1; ?>" />
                         <input type="text" name="nama" class="form-control" id="nama" autofocus autocomplete="off" value="<?= set_value('nama'); ?>" />
                         <?php echo form_error('nama', '<div class="text-small text-danger">', '</div>') ?>

                     </div>
                     <div class="form-group col-md-6">
                         <label for="jk"> Jenis Kelamin :</label>
                         <select class="form-control" id="jk" name="jk">
                             <option value="">--- Pilih Jenis Kelamin ---</option>
                             <option value="laki-laki">Laki-Laki</option>
                             <option value="perempuan">Perempuan</option>
                         </select>
                         <?php echo form_error('jk', '<div class="text-small text-danger">', '</div>') ?>

                     </div>

                     <div class="form-group col-md-6">
                         <label> Tanggal Lahir:</label>
                         <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" value="<?= set_value('tanggal_lahir'); ?>" />
                         <?php echo form_error('tanggal_lahir', '<div class="text-small text-danger">', '</div>') ?>
                     </div>

                     <div class="form-group col-md-6">
                         <label> Agama:</label>
                         <input type="text" name="agama" class="form-control" id="agama" value="<?= set_value('agama'); ?>" autocomplete="off" />
                         <?php echo form_error('agama', '<div class="text-small text-danger">', '</div>') ?>
                     </div>

                     <div class="col form-group">
                         <label>Alamat Sekarang:</label>
                         <textarea class="form-control" id="alamat_siswa" name="alamat_siswa" rows="3"><?= set_value('alamat_siswa'); ?></textarea>
                         <?php echo form_error('alamat_siswa', '<div class="text-small text-danger">', '</div>') ?>
                     </div>

                     <div class="form-group col-md-6">
                         <label>
                             <h6>Sekolah Asal:</h6>
                             <span>kosongkan jika tidak ada</span><br>
                         </label><br>
                         <div class="container">
                             <label>Nama Sekolah:</label>
                             <input type="text" name="nama_sekolah" class="form-control" id="nama_sekolah" value="<?= set_value('nama_sekolah'); ?>" autocomplete="off" />

                             <label>Alamat Sekolah:</label>
                             <textarea class="form-control" id="alamat_sekolah" name="alamat_sekolah" rows="3"><?= set_value('alamat_sekolah'); ?></textarea>
                         </div>

                     </div>
                     <hr>

                     <label>
                         <h4>Identitas Orangtua (Ayah) :</h4>
                     </label>

                     <div class="form-group col-md-6">
                         <label> Nama Lengkap:</label>
                         <input type="text" name="nama_ayah" class="form-control" id="nama_ayah" value="<?= set_value('nama_ayah'); ?>" autocomplete="off" />
                         <?php echo form_error('nama_ayah', '<div class="text-small text-danger">', '</div>') ?>
                     </div>
                     <div class="form-group col-md-6">
                         <label> Tanggal lahir:</label>
                         <input type="date" name="tgl_ayah" class="form-control" id="tgl_ayah" value="<?= set_value('tgl_ayah'); ?>" />
                         <?php echo form_error('tgl_ayah', '<div class="text-small text-danger">', '</div>') ?>
                     </div>
                     <div class="form-group col-md-6">
                         <label> Agama:</label>
                         <input type="text" name="agm_ayah" class="form-control" id="agm_ayah" value="<?= set_value('agm_ayah'); ?>" autocomplete="off" />
                         <?php echo form_error('agm_ayah', '<div class="text-small text-danger">', '</div>') ?>
                     </div>
                     <div class="form-group col-md-6">
                         <label> Pekerjaan:</label>
                         <input type="text" name="pkj_ayah" class="form-control" id="pkj_ayah" value="<?= set_value('pkj_ayah'); ?>" autocomplete="off" />
                         <?php echo form_error('pkj_ayah', '<div class="text-small text-danger">', '</div>') ?>
                     </div>
                     <div class="col form-group">
                         <label>Alamat Sekarang:</label>
                         <textarea class="form-control" id="alt_ayah" name="alt_ayah" rows="3"><?= set_value('alt_ayah'); ?></textarea>
                         <?php echo form_error('alt_ayah', '<div class="text-small text-danger">', '</div>') ?>
                     </div>

                     <label>
                         <h4>Identitas Orangtua (Ibu) :</h4>
                     </label>
                     <div class="form-group col-md-6">
                         <label> Nama Lengkap:</label>
                         <input type="text" name="nama_ibu" class="form-control" id="nama_ibu" value="<?= set_value('nama_ibu'); ?>" autocomplete="off" />
                         <?php echo form_error('nama_ibu', '<div class="text-small text-danger">', '</div>') ?>
                     </div>
                     <div class="form-group col-md-6">
                         <label> Tanggal lahir:</label>
                         <input type="date" name="tgl_ibu" class="form-control" id="tgl_ibu" value="<?= set_value('tgl_ibu'); ?>" />
                         <?php echo form_error('tgl_ibu', '<div class="text-small text-danger">', '</div>') ?>
                     </div>
                     <div class="form-group col-md-6">
                         <label> Agama:</label>
                         <input type="text" name="agm_ibu" class="form-control" id="agm_ibu" value="<?= set_value('agm_ibu'); ?>" autocomplete="off" />
                         <?php echo form_error('agm_ibu', '<div class="text-small text-danger">', '</div>') ?>
                     </div>
                     <div class="form-group col-md-6">
                         <label> Pekerjaan:</label>
                         <input type="text" name="pkj_ibu" class="form-control" id="pkj_ibu" value="<?= set_value('pkj_ibu'); ?>" autocomplete="off" />
                         <?php echo form_error('pkj_ibu', '<div class="text-small text-danger">', '</div>') ?>
                     </div>
                     <div class="col form-group">
                         <label>Alamat Sekarang:</label>
                         <textarea class="form-control" id="alt_ibu" name="alt_ibu" rows="3"><?= set_value('alt_ibu'); ?></textarea>
                         <?php echo form_error('alt_ibu', '<div class="text-small text-danger">', '</div>') ?>
                     </div>

                     <div class="text-center"><button type="submit" class="btn btn-info btn-lg">Daftar Sekarang</button></div>
                 </form>
             </div>

         </div>

     </div>
 </section><!-- End Contact Section -->