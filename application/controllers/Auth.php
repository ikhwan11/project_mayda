<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function login()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $halaman['page'] = 'login';
            $this->load->view('home_template/header', $halaman);
            $this->load->view('login_view');
            $this->load->view('home_template/footer');
        } else {
            $username  = $this->input->post('username');
            $password  = $this->input->post('password');

            $this->load->model('pendaftaran_model');

            $cek = $this->pendaftaran_model->cek_login($username, $password);


            if ($cek == FALSE) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				  Username atau Password salah!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
                redirect('auth/login');
            } else {
                $this->session->set_userdata('username', $cek->username);
                $this->session->set_userdata('nama', $cek->nama);
                $this->session->set_userdata('id_user', $cek->id_user);

                redirect('admin/');
            }
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('home/');
    }
}
