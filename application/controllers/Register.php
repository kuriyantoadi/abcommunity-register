<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_register');

        // session login
        // if ($this->session->userdata('operator') != true) {
        //     $url = base_url('C_login/fa');
        //     redirect($url);
        // }
    }


    public function index()
    {
        $this->load->view('register/index');
    }



    public function register_up()
    {
        $no_identitas = $this->input->post('no_identitas');
        $nama_lengkap = $this->input->post('nama_lengkap');
        $tmpt_lahir = $this->input->post('tmpt_lahir');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $no_hp = $this->input->post('no_hp');
        $jk = $this->input->post('jk');
        $email = $this->input->post('email');
        $alamat = $this->input->post('alamat');
        $kelurahan = $this->input->post('kelurahan');
        $kota = $this->input->post('kota');
        $provinsi = $this->input->post('provinsi');

        $data_tambah = array(
            'no_identitas' => $no_identitas,
            'nama_lengkap' => $nama_lengkap,
            'tmpt_lahir' => $tmpt_lahir,
            'tgl_lahir' => $tgl_lahir,
            'no_hp' => $no_hp,
            'jk' => $jk,
            'email' => $email,
            'kelurahan' => $kelurahan,
            'alamat' => $alamat,
            'kota' => $kota,
            'provinsi' => $provinsi
        );

        $this->M_register->register_up($data_tambah);

        $this->session->set_flashdata('msg', '
						<div class="alert alert-info alert-dismissible fade show" role="alert">
							<strong>Pendaftaran Anggota berhasil</strong>
						</div>');
        redirect('register/data_anggota');
    }

    public function data_register()
    {
        $this->load->view('register/data_register');
    }

    public function data_anggota()
    {
        $data['tampil'] = $this->M_register->data_anggota();
        $this->load->view('register/data_anggota', $data);
    }
}
