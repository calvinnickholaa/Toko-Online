<?php
class Kategori extends CI_Controller
{
    public function makanan()
    {
        $data['makanan'] = $this->model_kategori->data_makanan()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('makanan', $data);
        $this->load->view('templates/footer');
    }
    public function snack()
    {
        $data['snack'] = $this->model_kategori->data_snack()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('snack', $data);
        $this->load->view('templates/footer');
    }
    public function minuman()
    {
        $data['minuman'] = $this->model_kategori->data_minuman()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('minuman', $data);
        $this->load->view('templates/footer');
    }
}
