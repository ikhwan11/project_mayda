<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function index()
    {
        $halaman['page'] = 'Dashboard';
        $this->load->view('admin_template/header', $halaman);
        $this->load->view('admin_template/sidebar');
        $this->load->view('admin/dashboard_view');
        $this->load->view('admin_template/footer');
    }

    public function laporan()
    {
        $data = array(
            'tk' => $this->db->query("SELECT * FROM data_siswa WHERE kategori = 'TK'AND periode = '2021/2022'")->result(),
            'sd' => $this->db->query("SELECT * FROM data_siswa WHERE kategori = 'SD'AND periode = '2021/2022'")->result(),
            'smp' => $this->db->query("SELECT * FROM data_siswa_smp smp, nilai nl WHERE nl.id_siswa_smp = smp.id_siswa_smp AND periode='2021/2022'")->result()
        );

        $this->load->view('admin/laporan_view', $data);
    }
}
