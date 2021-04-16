<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Calon_siswa extends CI_Controller
{

    // tk
    public function open_tk()
    {
        $data['formulir'] = $this->db->query("SELECT * FROM formulir WHERE kategori = 'TK'")->result();
        $halaman['page'] = 'Calon Siswa';
        $this->load->view('admin_template/header', $halaman);
        $this->load->view('admin_template/sidebar');
        $this->load->view('admin/calon_siswa_tk_view', $data);
        $this->load->view('admin_template/footer');
    }

    // tk end
    // sd
    public function open_sd()
    {
        $data['formulir'] = $this->db->query("SELECT * FROM formulir WHERE kategori = 'SD'")->result();
        $halaman['page'] = 'Calon Siswa';
        $this->load->view('admin_template/header', $halaman);
        $this->load->view('admin_template/sidebar');
        $this->load->view('admin/calon_siswa_sd_view', $data);
        $this->load->view('admin_template/footer');
    }

    // sd end
    // smp
    public function open_smp()
    {
        $data['formulir'] = $this->db->query("SELECT * FROM formulir WHERE kategori = 'SMP'")->result();
        $halaman['page'] = 'Calon Siswa';
        $this->load->view('admin_template/header', $halaman);
        $this->load->view('admin_template/sidebar');
        $this->load->view('admin/calon_siswa_smp_view', $data);
        $this->load->view('admin_template/footer');
    }

    // smp end

    public function detail_siswa($id)
    {
        $data['calon_siswa'] = $this->db->query("SELECT * FROM formulir WHERE no_formulir = '$id'")->result();
        $halaman['page'] = 'Calon Siswa';
        $this->load->view('admin_template/header', $halaman);
        $this->load->view('admin_template/sidebar');
        $this->load->view('admin/calon_siswa_detail_view', $data);
        $this->load->view('admin_template/footer');
    }

    public function detail_siswa_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->detail_siswa;
        } else {

            $id                     = $this->input->post('no_formulir');
            $periode                = $this->input->post('periode');
            $kategori               = $this->input->post('kategori');
            $nama                   = $this->input->post('nama');
            $jk                     = $this->input->post('jk');
            $tanggal_lahir          = $this->input->post('tanggal_lahir');
            $agama                  = $this->input->post('agama');
            $alamat_siswa           = $this->input->post('alamat_siswa');
            $nama_sekolah           = $this->input->post('nama_sekolah');
            $alamat_sekolah         = $this->input->post('alamat_sekolah');
            $nama_ayah              = $this->input->post('nama_ayah');
            $tgl_ayah               = $this->input->post('tgl_ayah');
            $agm_ayah               = $this->input->post('agm_ayah');
            $pkj_ayah               = $this->input->post('pkj_ayah');
            $alt_ayah               = $this->input->post('alt_ayah');
            $nama_ibu               = $this->input->post('nama_ibu');
            $tgl_ibu                = $this->input->post('tgl_ibu');
            $agm_ibu                = $this->input->post('agm_ibu');
            $pkj_ibu                = $this->input->post('pkj_ibu');
            $alt_ibu                = $this->input->post('alt_ibu');


            $data = array(
                'kategori'                => $kategori,
                'periode'                 => $periode,
                'nama'                    => $nama,
                'jenis_kelamin'           => $jk,
                'tanggal_lahir'           => $tanggal_lahir,
                'agama'                   => $agama,
                'alamat_siswa'            => $alamat_siswa,
                'nama_sekolah'            => $nama_sekolah,
                'alamat_sekolah'          => $alamat_sekolah,
                'nama_ayah'               => $nama_ayah,
                'tanggal_lahir_ayah'      => $tgl_ayah,
                'agama_ayah'              => $agm_ayah,
                'pekerjaan_ayah'          => $pkj_ayah,
                'alamat_ayah'             => $alt_ayah,
                'nama_ibu'                => $nama_ibu,
                'tanggal_lahir_ibu'       => $tgl_ibu,
                'agama_ibu'               => $agm_ibu,
                'pekerjaan_ibu'           => $pkj_ibu,
                'alamat_ibu'              => $alt_ibu,

            );

            $this->pendaftaran_model->insert_data($data, 'data_siswa');

            $where = array('no_formulir' => $id);
            $this->pendaftaran_model->delete_data($where, 'formulir');

            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				  konfirmasi berhasil !
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
            redirect('calon_siswa/data_siswa');
        }
    }

    public function detail_siswa_aksi_smp()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->detail_siswa;
        } else {

            $id                     = $this->input->post('no_formulir');
            $periode                = $this->input->post('periode');
            $kategori               = $this->input->post('kategori');
            $nama                   = $this->input->post('nama');
            $jk                     = $this->input->post('jk');
            $tanggal_lahir          = $this->input->post('tanggal_lahir');
            $agama                  = $this->input->post('agama');
            $alamat_siswa           = $this->input->post('alamat_siswa');
            $nama_sekolah           = $this->input->post('nama_sekolah');
            $alamat_sekolah         = $this->input->post('alamat_sekolah');
            $nama_ayah              = $this->input->post('nama_ayah');
            $tgl_ayah               = $this->input->post('tgl_ayah');
            $agm_ayah               = $this->input->post('agm_ayah');
            $pkj_ayah               = $this->input->post('pkj_ayah');
            $alt_ayah               = $this->input->post('alt_ayah');
            $nama_ibu               = $this->input->post('nama_ibu');
            $tgl_ibu                = $this->input->post('tgl_ibu');
            $agm_ibu                = $this->input->post('agm_ibu');
            $pkj_ibu                = $this->input->post('pkj_ibu');
            $alt_ibu                = $this->input->post('alt_ibu');


            $data = array(
                'kategori'                => $kategori,
                'periode'                 => $periode,
                'nama'                    => $nama,
                'jenis_kelamin'           => $jk,
                'tanggal_lahir'           => $tanggal_lahir,
                'agama'                   => $agama,
                'alamat_siswa'            => $alamat_siswa,
                'nama_sekolah'            => $nama_sekolah,
                'alamat_sekolah'          => $alamat_sekolah,
                'nama_ayah'               => $nama_ayah,
                'tanggal_lahir_ayah'      => $tgl_ayah,
                'agama_ayah'              => $agm_ayah,
                'pekerjaan_ayah'          => $pkj_ayah,
                'alamat_ayah'             => $alt_ayah,
                'nama_ibu'                => $nama_ibu,
                'tanggal_lahir_ibu'       => $tgl_ibu,
                'agama_ibu'               => $agm_ibu,
                'pekerjaan_ibu'           => $pkj_ibu,
                'alamat_ibu'              => $alt_ibu,


            );

            $this->pendaftaran_model->insert_data($data, 'data_siswa_smp');

            $where = array('no_formulir' => $id);
            $this->pendaftaran_model->delete_data($where, 'formulir');

            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				  konfirmasi berhasil !
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
            redirect('kelola_test/');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('kategori', 'Kategori pendaftaran', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal lahir', 'required');
        $this->form_validation->set_rules('agama', 'Agama', 'required');
        $this->form_validation->set_rules('alamat_siswa', 'Alamat siswa', 'required');

        $this->form_validation->set_rules('nama_ayah', 'Nama ayah', 'required');
        $this->form_validation->set_rules('tgl_ayah', 'Tanggan lahir ayah', 'required');
        $this->form_validation->set_rules('agm_ayah', 'Agama ayah ', 'required');
        $this->form_validation->set_rules('pkj_ayah', 'Pekerjaan ayah', 'required');
        $this->form_validation->set_rules('alt_ayah', 'Alamat ayah', 'required');

        $this->form_validation->set_rules('nama_ibu', 'Nama ibu', 'required');
        $this->form_validation->set_rules('tgl_ibu', 'Tanggan lahir ibu', 'required');
        $this->form_validation->set_rules('agm_ibu', 'Agama ibu ', 'required');
        $this->form_validation->set_rules('pkj_ibu', 'Pekerjaan ibu', 'required');
        $this->form_validation->set_rules('alt_ibu', 'Alamat ibu', 'required');
    }

    public function data_siswa()
    {
        $halaman['page'] = 'Calon Siswa';
        $data['siswa'] = $this->pendaftaran_model->get_data('data_siswa')->result();
        $this->load->view('admin_template/header', $halaman);
        $this->load->view('admin_template/sidebar');
        $this->load->view('admin/data_siswa_view', $data);
        $this->load->view('admin_template/footer');
    }
}
