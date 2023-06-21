<?php

use chriskacerguis\RestServer\RestController;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

defined('BASEPATH') or exit('No direct script access allowed');

class Auth2 extends RestController
{
    private $key;

    function __construct()
    {
        parent::__construct();
        $this->key = '1234567890';
    }
    public function index_post()
    {
        $date = new DateTime();
        $username = $this->post('username');
        $password = $this->post('password');
        $encrypt_pass = hash('sha512', $password . $this->key);

        $datauser = $this->Model_users->doLogin($username, $encrypt_pass);
        // var_dump($encrypt_pass);
        // die;
        if ($datauser) {
            $payload = [
                'id' => $datauser[0]->id,
                'nama' => $datauser[0]->nama,
                'username' => $datauser[0]->username,
                'role_id' => $datauser[0]->role_id,
                'iat' => $date->getTimestamp(), // waktu token digenerate
                'exp' => $date->getTimestamp() + (60 * 3) //masa berlaku token
            ];
            $token = JWT::encode($payload, $this->key, 'HS256');
            $this->response([
                'status' => true,
                'message' => 'Login berhasil',
                'result' => [
                    'id' => $datauser[0]->id,
                    'nama' => $datauser[0]->nama,
                    'username' => $datauser[0]->username,
                    'role_id' => $datauser[0]->role_id,
                ],
                'token' => $token
            ], self::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'Username dan Password salah',
            ], self::HTTP_FORBIDDEN);
        }
    }

    protected function checktoken()
    {
        $jwt = $this->input->get_request_header('Authorization');
        try {
            JWT::decode($jwt, new Key($this->key, 'HS256'));
        } catch (Exception $e) {
            $this->response([
                'status' => false,
                'message' => 'Invalid Token!',
            ], self::HTTP_UNAUTHORIZED);
        }
    }
}
