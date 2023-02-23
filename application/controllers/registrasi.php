<?php
class Registrasi extends CI_Controller
{
    public function index()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required', [
            'required' => 'Wajib diisi !'
        ]);
        $this->form_validation->set_rules('username', 'Username', 'required', [
            'required' => 'Wajib diisi !'
        ]);
        $this->form_validation->set_rules('password1', 'password', 'required|matches[password2]', [
            'required' => 'Password wajib diisi !',
            'matches' => 'Password tidak cocok !'
        ]);
        $this->form_validation->set_rules('password2', 'password', 'required|matches[password1]');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header');
            $this->load->view('registrasi');
        } else {
            $data = array(
                'id' => '',
                'nama' => $this->input->post('nama'),
                'username' => $this->input->post('username'),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2
            );

            $this->db->insert('tb_user', $data);
            redirect('auth/login');
        }
    }
}
