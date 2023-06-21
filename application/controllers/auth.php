<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == false) {

            $data['title'] = 'User Login';
            $this->load->view('templates/header');
            $this->load->view('form_login', $data);
        } else {
            $this->_login();
        }
    }

    public function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('tb_user', ['username' => $username])->row_array();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $user_data = [
                    'id' => $user['id'],
                    'username' => $user['username'],
                    'role_id' => $user['role_id'],
                ];
                $this->session->set_userdata($user_data);

                if ($user['role_id'] == '1') {
                    redirect('admin/dashboard_admin');
                } else if ($user['role_id'] == '2') {
                    redirect('welcome');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    			Email atau Password salah !
    			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    			<span aria-hidden="true">&times;</span>
    			</button>
    			</div>');
                redirect('Auth/index');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    	Email belum registrasi!
    	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    	<span aria-hidden="true">&times;</span>
    	</button>
        </div>');
            redirect('Auth/index', $data);
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth/index');
    }
}
