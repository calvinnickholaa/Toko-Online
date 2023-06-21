<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once APPPATH . 'controllers/Auth2.php';
class Barang extends Auth2
{

    function __construct()
    {
        $this->checktoken();
    }

    public function index_get($id = 0)
    {
        $check_data = $this->db->get_where('tb_barang', ['id_brng' => $id])->row_array();

        //jika mengisi id barang

        if ($id) {
            if ($check_data) {
                $this->response($check_data, RestController::HTTP_OK);
            } else {
                $this->response([
                    'status' => false,
                    'message' => 'Data tidak ditemukan'
                ], 404);
            }
        } else {
            $data = $this->db->get('tb_barang')->result();

            $this->response($data, RestController::HTTP_OK);
        }
    }

    public function index_post()
    {
        $data = array(
            'nama_brng' => $this->post('nama_brng'),
            'keterangan' => $this->post('keterangan'),
            'kategori' => $this->post('kategori'),
            'harga' => $this->post('harga'),
            'stock' => $this->post('stock'),
            'gambar' => $this->post('gambar')
        );

        $insert = $this->db->insert('tb_barang', $data);

        if ($insert) {
            $this->response($data, RestController::HTTP_OK);
        } else {
            $this->response(array('status' => 'Failed', 502));
        }
    }
    public function index_put()
    {

        $id_brng = $this->put('id_brng');

        // $check_data = $this->db->get_where('tb_brng', ['id_brng' => $id_brng])->row_array();
        // if($id_brng){
        //     if($check_data){
        //     }else{

        //     }
        // }else{

        // }

        $data = array(
            'nama_brng' => $this->put('nama_brng'),
            'keterangan' => $this->put('keterangan'),
            'kategori' => $this->put('kategori'),
            'harga' => $this->put('harga'),
            'stock' => $this->put('stock'),
            'gambar' => $this->put('gambar')
        );

        $this->db->where('id_brng', $id_brng);
        $update = $this->db->update('tb_barang', $data);

        if ($update) {
            $this->response($data, RestController::HTTP_OK);
        } else {
            $this->response(array('status' => 'Failed', 502));
        }
    }

    public function index_delete()
    {
        $id_brng = $this->delete('id_brng');

        $check_data = $this->db->get_where('tb_barang', ['id_brng' => $id_brng])->row_array();

        if ($check_data) {
            $this->db->where('id_brng', $id_brng);
            $this->db->delete('tb_barang');

            $this->response(array('status' => 'success'), 200);
        } else {
            $this->response(array('status' => 'Data Not Found'), 404);
        }
    }
}
