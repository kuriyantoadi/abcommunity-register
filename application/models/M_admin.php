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

    public function hapus_anggota($id_anggota)
    {
        $this->db->where($id_anggota);
        $this->db->delete('tb_anggota');
    }


    function lihat_anggota($id_lapangan)
    {
        $this->db->select('*');
        $this->db->from('tb_anggota');
        $this->db->where('tb_anggota.id_anggota', $id_lapangan);
        $query = $this->db->get()->result();
        return $query;
    }
}
