<?php

class Model_kategori extends CI_Model
{
    public function data_makanan()
    {
        return $this->db->get_where("tb_barang", array('kategori' => 'makanan'));
    }
    public function data_snack()
    {
        return $this->db->get_where("tb_barang", array('kategori' => 'snack'));
    }
    public function data_minuman()
    {
        return $this->db->get_where("tb_barang", array('kategori' => 'minuman'));
    }
}
