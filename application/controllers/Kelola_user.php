<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelola_user extends CI_Controller
{

    public function index()
    {
        $data['user'] = $this->pendaftaran_model->get_data('user')->result();
        $halaman['page'] = 'Kelola User';
        $this->load->view('admin_template/header', $halaman);
        $this->load->view('admin_template/sidebar');
        $this->load->view('admin/kelola_user_view', $data);
        $this->load->view('admin_template/footer');
    }

    public function tambah_user()
    {
        $halaman['page'] = 'Tambah User';
        $this->load->view('admin_template/header', $halaman);
        $this->load->view('admin_template/sidebar');
        $this->load->view('admin/kelola_user_tambah_view');
        $this->load->view('admin_template/footer');
    }

    public function tambah_user_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambah_user();
        } else {
            $nama               = $this->input->post('nama');
            $username           = $this->input->post('username');
            $password           = $this->input->post('password');

            $data = array(
                'nama'               => $nama,
                'username'           => $username,
                'password'           => $password,

            );


            $this->pendaftaran_model->insert_data($data, 'user');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Tambah user berhasil!</div>');
            redirect('kelola_user/');
        }
    }


    public function hapus_user($id)
    {
        $where = array('id_user' => $id);

        $this->pendaftaran_model->delete_data($where, 'user');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Hapus user berhasil!</div>');
        redirect('kelola_user/');
    }

    public function edit_user($id)
    {
        $halaman['page'] = 'Tambah User';
        $where = array('id_user' => $id);
        $data['user'] = $this->db->query("SELECT * FROM user WHERE id_user = '$id'")->result();

        $this->load->view('admin_template/header', $halaman);
        $this->load->view('admin_template/sidebar');
        $this->load->view('admin/kelola_user_edit_view', $data);
        $this->load->view('admin_template/footer');
    }

    public function edit_user_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->edit_user;
        } else {
            $id               = $this->input->post('id_user');
            $nama               = $this->input->post('nama');
            $username           = $this->input->post('username');
            $password           = $this->input->post('password');

            $data = array(
                'nama'               => $nama,
                'username'           => $username,
                'password'           => $password,

            );

            $where = array(
                'id_user'    => $id

            );


            $this->pendaftaran_model->update_data('user', $data, $where);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Update user berhasil!</div>');
            redirect('kelola_user/');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nama', 'nama', 'required',);
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
    }
}
