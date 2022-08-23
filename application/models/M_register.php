<?php

class M_register extends CI_Model{

  function register_up($data_tambah)
  {
    $this->db->insert('tb_anggota',$data_tambah);
  }


}
