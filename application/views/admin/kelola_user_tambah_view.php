<section id="main-content">
    <section class="wrapper">
        <div class="container">
            <div class="row">
                <h3>Masukkan data info user</h3>
                <div class="panel-body col-md-6">
                    <form class="form-horizontal" role="form" action="<?= base_url('kelola_user/tambah_user_aksi'); ?>" method="POST">
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Nama</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="nama" name="nama" autocomplete="off" autofocus>
                                <?php echo form_error('nama', '<div class="text-small text-danger">', '</div>') ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-2 control-label">Username</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="username" name="username" autocomplete="off">
                                <?php echo form_error('username', '<div class="text-small text-danger">', '</div>') ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-2 control-label">Password</label>
                            <div class="col-lg-10">
                                <input type="password" class="form-control" id="password" name="password">
                                <?php echo form_error('password', '<div class="text-small text-danger">', '</div>') ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button type="submit" class="btn btn-info">Tambah User</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>