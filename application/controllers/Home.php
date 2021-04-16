<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function index()
	{
		$data['jadwal'] = $this->pendaftaran_model->get_data('jadwal')->result();
		$halaman['page'] = 'Home';
		$this->load->view('home_template/header', $halaman);
		$this->load->view('home_view', $data);
		$this->load->view('home_template/footer');
	}

	// pendaftaran 

	public function form_pendaftaran()
	{
		$halaman['page'] = 'Pendaftaran';
		$this->load->view('home_template/header', $halaman);
		$this->load->view('form_pendaftaran_view');
		$this->load->view('home_template/footer');
	}

	public function pendaftaran_aksi()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->form_pendaftaran();
		} else {
			$kategori               = $this->input->post('kategori');
			$periode                = $this->input->post('periode');
			$nama                   = $this->input->post('nama');
			$jk                   	= $this->input->post('jk');
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
				'kategori'				=> $kategori,
				'nama'					=> $nama,
				'periode'				=> $periode,
				'jenis_kelamin'			=> $jk,
				'tanggal_lahir'			=> $tanggal_lahir,
				'agama'					=> $agama,
				'alamat_siswa'			=> $alamat_siswa,
				'nama_sekolah'			=> $nama_sekolah,
				'alamat_sekolah'		=> $alamat_sekolah,
				'nama_ayah'				=> $nama_ayah,
				'tanggal_lahir_ayah'	=> $tgl_ayah,
				'agama_ayah'			=> $agm_ayah,
				'pekerjaan_ayah'		=> $pkj_ayah,
				'alamat_ayah'			=> $alt_ayah,
				'nama_ibu'				=> $nama_ibu,
				'tanggal_lahir_ibu'		=> $tgl_ibu,
				'agama_ibu'				=> $agm_ibu,
				'pekerjaan_ibu'			=> $pkj_ibu,
				'alamat_ibu'			=> $alt_ibu,


			);


			$this->pendaftaran_model->insert_data($data, 'formulir');
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Pendaftaran berhasil !
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('home/form_pendaftaran');
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
	// end pendaftaran

}
