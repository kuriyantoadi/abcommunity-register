<?php

class M_admin extends CI_Model
{

    function tampil_anggota()
    {
        $this->db->select('*');
        $this->db->from('tb_anggota');
        $query = $this->db->get()->result();
        return $query;
    }

}
