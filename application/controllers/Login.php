<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_login');
    }

    public function index()
    {
        $this->load->view('admin/login');
    }

    public function login_admin()
    {
        $username = htmlspecialchars($this->input->post('username', true), ENT_QUOTES);
        $password = htmlspecialchars($this->input->post('password', true), ENT_QUOTES);

        $cek_login = $this->M_login->login_admin($username, $password);

        if ($cek_login->num_rows() > 0) {
            $data = $cek_login->row_array();

            if ($data['status'] == 'admin') {
                $this->session->set_userdata('admin', true);
                $this->session->set_userdata('ses_id', $data['id_admin']);
                $this->session->set_userdata('ses_user', $data['username']);
                // $this->session->set_userdata('ses_id_kelas', $data['id_kelas']);
                redirect('admin/dashboard');
                //
                // }elseif ($data['status']=='admin') {
                //   $this->session->set_userdata('admin', true);
                //   $this->session->set_userdata('ses_id', $data['id_admin']);
                //   $this->session->set_userdata('ses_user', $data['username']);
                //   redirect('C_admin/home');

            } else {
                $url = base_url('admin/login');
                echo $this->session->set_flashdata('msg', '

        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          Username atau Password Salah<br> Silahkan Login Kembali
        </div>
        ');
                redirect($url);
            }
        }

        $this->session->set_flashdata('msg', '
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      Username atau Password Salah<br> Silahkan Login Kembali
    </div>
    ');
        $url = base_url('C_login/fa');
        redirect($url);
    }

    public function admin_logout()
    {
        $this->session->sess_destroy();
        $url = base_url();
        redirect('Login/index');
    }
}
