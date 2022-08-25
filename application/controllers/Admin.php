<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_admin');

        // session login
        if ($this->session->userdata('admin') != true) {
            $url = base_url('Login/index');
            redirect($url);
        }
    }


    public function dashboard()
    {
        $data['tampil'] = $this->M_admin->tampil_anggota();

        $this->load->view('admin/dashboard', $data);
    }

    public function hapus_anggota($id_anggota)
    {
        $id_anggota = array('id_admin' => $id_anggota);

        $success = $this->M_admin->hapus_anggota($id_anggota);
        $this->session->set_flashdata('msg', '
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
						Data Berhasil Dihapus
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
						');
        redirect('Admin/dashboard');
    }
}
