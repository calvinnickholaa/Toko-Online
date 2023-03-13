<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function login()
    {
        $this->form_validation->set_rules('username', 'Username', 'required', [
            'required' => 'Username wajib diisi !'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required', [
            'required' => 'Password wajib diisi !'
        ]);
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header');
            $this->load->view('form_login');
        } else {
            // $jwt = new JWT();
            // $JwtSecretKey = "myLoginSecret";
            $auth = $this->model_auth->cek_login($username, $password);
            // $token = $jwt->encode($auth, $JwtSecretKey, 'HS256');
            // echo json_encode($token);

            if ($auth == FALSE) {
                $this->session->set_flashdata(
                    'pesan',
                    '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Username atau Password Anda Salah !
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>'
                );
                redirect('auth/login');
            } else {
                $this->session->set_userdata('username', $auth->username);
                $this->session->set_userdata('role_id', $auth->role_id);

                switch ($auth->role_id) {
                    case 1:
                        redirect('admin/dashboard_admin');
                        break;
                    case 2:
                        redirect('welcome');
                        break;

                    default:
                        break;
                }
            }
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth/login');
    }

    // public function token()
    // {
    //     $jwt = new JWT();
    //     $JwtSecretKey = "Mysecretwordshere";
    //     $data = array(
    //         'id' => 17,
    //         'username' => 'calvin',
    //         'role_id' => '1',
    //     );

    //     $token = $jwt->encode($data, $JwtSecretKey, 'HS256');
    //     echo $token;
    // }

    // public function decode_token()
    // {
    //     $token = $this->uri->segment(3);

    //     $jwt = new JWT();

    //     $JwtSecretKey = "Mysecretwordshere";

    //     $decode_token = $jwt->decode($token, $JwtSecretKey, 'HS256');

    //     //this will return std object
    //     // echo '<pre>';
    //     // print_r($decode_token);

    //     // it will return json
    //     $token1 = $jwt->jsonEncode($decode_token);
    //     echo $token1;
    // }

    // public function verify_token()
    // {
    //     $verify = $this->load->helper('verifyAuthToken');

    //     header("Access-Control-Allow-Origin: *");
    //     header("Access-Control-Allow-Methods: GET, OPTION, POST, GET, PUT");
    //     header("Access-Control-Allow-Headers: Content-Type, Content-Length, Accept-Encoding");
    // }

    // public function getUsers()

    // {
    //     $headerToken = $this->input->get_request_header('Authorization');
    //     $splitToken = explode(" ", $headerToken);
    //     $token = $splitToken[1];

    //     try {
    //         $token = verifyAuthToken($token);
    //         if ($token) {
    //             $users = $this->model_auth->cek_login();
    //             echo json_encode($users);
    //         }
    //     } catch (Exception $e) {
    //         $error = array(
    //             "status" => 401,
    //             "message" => 'Invalid Token Provided',
    //             "success" => false
    //         );
    //         echo json_encode($error);
    //     }
    // }
}
