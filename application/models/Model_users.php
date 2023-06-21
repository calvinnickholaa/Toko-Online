<?php

class Model_users extends CI_Model
{
    private $_user = 'tb_user';
    public function doLogin($username, $encrypt_pass)
    {
        $query = $this->db->get_where($this->_user, ['username' => $username, 'password' => $encrypt_pass]);
        if ($query->num_rows() == 1)
            return $query->result();
        else return false;
    }
}
