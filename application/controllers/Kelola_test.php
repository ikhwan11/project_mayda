<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelola_test extends CI_Controller
{

    public function index()
    {

        if ($this->input->post('submit')) {
            $data['keyword'] =  $this->input->post('keyword');
        } else {
            $data['keyword'] = null;
        }

        $data = array(
            'siswa' => $this->pendaftaran_model->cari($data['keyword'])
        );
        $halaman['page'] = 'Input Nilai';
        $this->load->view('admin_template/header', $halaman);
        $this->load->view('admin_template/sidebar');
        $this->load->view('admin/input_nilai_view', $data);
        $this->load->view('admin_template/footer');
    }


    public function input_nilai_form($id)
    {
        $halaman['page'] = 'Input Nilai';
        $data['siswa'] = $this->pendaftaran_model->ambil_id_smp($id);
        $this->load->view('admin_template/header', $halaman);
        $this->load->view('admin_template/sidebar');
        $this->load->view('admin/input_nilai_form_view', $data);
        $this->load->view('admin_template/footer');
    }
    public function input_nilai_aksi()
    {

        $id_siswa                  = $this->input->post('id_siswa');
        $nilaiMatematika           = $this->input->post('nilaiMatematika');
        $nilaiIndonesia            = $this->input->post('nilaiIndonesia');
        $nilaiInggris              = $this->input->post('nilaiInggris');
        $nilaiIpa                  = $this->input->post('nilaiIpa');
        $nilaiIps                  = $this->input->post('nilaiIps');
        $rata_rata                  = $this->input->post('demo');

        $data = array(
            'id_siswa_smp'            => $id_siswa,
            'matematika'              => $nilaiMatematika,
            'bahasa_indonesia'        => $nilaiIndonesia,
            'bahasa_inggris'          => $nilaiInggris,
            'ipa'                     => $nilaiIpa,
            'ips'                     => $nilaiIps,
            'rata_rata'               => $rata_rata,

        );

        $this->pendaftaran_model->insert_data($data, 'nilai');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">input nilai berhasil</div>');

        redirect('kelola_test/');
    }


    // unggah jadwal
    public function unggah_jadwal_test()
    {
        $data['jadwal'] = $this->pendaftaran_model->get_data('jadwal')->result();
        $halaman['page'] = 'Unggah jadwal test';
        $this->load->view('admin_template/header', $halaman);
        $this->load->view('admin_template/sidebar');
        $this->load->view('admin/jadwal_test_form_view', $data);
        $this->load->view('admin_template/footer');
    }

    public function unggah_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->unggah_jadwal_test();
        } else {
            $nama                   = $this->input->post('nama');
            $tanggal_test           = $this->input->post('tanggal_test');
            $jam                    = $this->input->post('jam');
            $tempat                 = $this->input->post('tempat');
            $keterangan             = $this->input->post('keterangan');

            $data = array(
                'nama'                => $nama,
                'tanggal_test'        => $tanggal_test,
                'jam'                 => $jam,
                'tempat'              => $tempat,
                'keterangan'          => $keterangan,
            );

            $this->pendaftaran_model->insert_data($data, 'jadwal');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				  jadwal berhasil dibuat !
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');

            redirect('kelola_test/unggah_jadwal_test');
        }
    }

    public function edit_jadwal_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->unggah_jadwal_test();
        } else {
            $id_jadwal              = $this->input->post('id_jadwal');
            $nama                   = $this->input->post('nama');
            $tanggal_test           = $this->input->post('tanggal_test');
            $jam                    = $this->input->post('jam');
            $tempat                 = $this->input->post('tempat');
            $keterangan             = $this->input->post('keterangan');

            $data = array(
                'nama'                => $nama,
                'tanggal_test'        => $tanggal_test,
                'jam'                 => $jam,
                'tempat'              => $tempat,
                'keterangan'          => $keterangan,
            );

            $where = array(
                'id_jadwal' => $id_jadwal
            );

            $this->pendaftaran_model->update_data('jadwal', $data, $where);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				  jadwal berhasil di update !
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');

            redirect('kelola_test/unggah_jadwal_test');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('tanggal_test', 'Tanggal', 'required');
        $this->form_validation->set_rules('jam', 'Jam', 'required');
        $this->form_validation->set_rules('tempat', 'Tempat', 'required');
        $this->form_validation->set_rules('keterangan', 'keterangan', 'required');
    }

    // unggajh jadwal end

    public function info_lulus()
    {
        $data = array(
            'siswa' => $this->db->query("SELECT * FROM nilai nl, data_siswa_smp dt WHERE nl.id_siswa_smp = dt.id_siswa_smp")->result(),
        );
        $halaman['page'] = 'Info kelulusan';
        $this->load->view('admin_template/header', $halaman);
        $this->load->view('admin_template/sidebar');
        $this->load->view('admin/info_lulus_view', $data);
        $this->load->view('admin_template/footer');
    }
}
