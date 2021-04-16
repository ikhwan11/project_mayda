<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
            <li class="active">
                <a class="" href="<?= base_url('admin/'); ?>">
                    <i class="icon_house_alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>


            <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="icon_group"></i>
                    <span>Calon Siswa</span>
                    <i class="arrow"></i>
                </a>
                <ul class="sub">
                    <li><a class="" href="<?= base_url('calon_siswa/open_tk'); ?>">TK</a></li>
                    <li><a class="" href="<?= base_url('calon_siswa/open_sd'); ?>">SD</a></li>
                    <li><a class="" href="<?= base_url('calon_siswa/open_smp'); ?>">SMP</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="icon_document_alt"></i>
                    <span>Kelola Test SMP</span>
                    <i class="arrow"></i>
                </a>
                <ul class="sub">
                    <li><a class="" href="<?= base_url('kelola_test/unggah_jadwal_test'); ?>" title="Test hanya untuk tingkat smp">Buat Jadwal Test</a></li>
                    <li><a class="" href="<?= base_url('kelola_test/'); ?>">Input Nilai</a></li>
                    <li><a class="" href="<?= base_url('kelola_test/info_lulus'); ?>">Info Calon Siswa lulus</a></li>
                </ul>
            </li>

            <li>
                <a class="" href="<?= base_url('calon_siswa/data_siswa'); ?>">
                    <i class="icon_book"></i>
                    <span>Data siswa TK & SD</span>
                </a>
            </li>
            <li>
                <a class="" href="<?= base_url('kelola_user/'); ?>">
                    <i class="icon_profile"></i>
                    <span>Kelola User</span>
                </a>
            </li>
            <li>
                <a class="" href="<?= base_url('admin/laporan'); ?>">
                    <i class="icon_printer"></i>
                    <span>Buat Laporan</span>
                </a>
            </li>

        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->