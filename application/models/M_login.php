<?php

class M_login extends CI_Model{

  //tampil buku
  function login_admin($username, $password){
    $login = $this->db->query("SELECT * from tb_admin where username='$username' AND password=sha1('$password') ");
    return $login;
  }

}
