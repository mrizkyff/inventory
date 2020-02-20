<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller
{
    function __construct(){
        parent::__construct();
        $this->load->model('m_login');
    }
    function index(){
        $this->load->view('adm_login');
    }
    function aksi_login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => $password
        );

        $idUser = $this->m_login->cariId($where);
        $cek = $this->m_login->cek_login("privilege",$where)->num_rows();
        if($cek > 0){

            $data_session = array(
                'username' => $username,
                'status' => "login",
                'idUser' => $idUser
            );

            $this->session->set_userdata($data_session);

            redirect(base_url("administrator"));

        }
        else{
            echo "Username dan password salah!";
        }
    }
    function logout(){
        $this->session->sess_destroy();
        redirect(base_url("login"));
    }
}

?>