<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Controller
{

    function __construct(){
        parent::__construct();
        
        $this->load->model('m_barang');
        if($this->session->userdata('status') != "login"){
            redirect(base_url("login"));
        }

        $username = $this->session->userdata('username');

        
    }

    function cekJumlah(){
        $perencanaan = $this->m_barang->cek_jumlah("brg_perencanaan")->num_rows();
        $baru = $this->m_barang->cek_jumlah("brg_baru")->num_rows();
        $register = $this->m_barang->cek_jumlah("brg_register")->num_rows();
        $rusak = $this->m_barang->cek_jumlah("brg_rusak")->num_rows();

        $jumlah = array(
            $perencanaan,
            $baru,
            $register,
            $rusak
        );

        return $jumlah;
    }
    function index(){
        $data['jumlah'] = $this->cekJumlah();
        
        // var_dump($data);
        $this->load->view('templates/adm_header');
        $this->load->view('templates/adm_sidebar');
        $this->load->view('adm_dashboard',$data);
        $this->load->view('templates/adm_footer');
        $this->load->view('script/adm_dashboard');
    }

    function kelola(){
        $this->load->view('templates/adm_header');
        $this->load->view('templates/adm_sidebar');
        $this->load->view('contentBarang');
        $this->load->view('templates/adm_footer');
    }
    function brg_perencanaan(){
        $data['uname'] = $this->session->userdata('username');
        $this->load->view('templates/adm_header');
        $this->load->view('templates/adm_sidebar');
        $this->load->view('adm_dashboard_perencanaan',$data);
        $this->load->view('templates/adm_footer');
        $this->load->view('script/brg_perencanaan');
    }
    function brg_baru(){
        $data['username'] = $this->session->userdata('username');
        $this->load->view('templates/adm_header');
        $this->load->view('templates/adm_sidebar');
        $this->load->view('adm_dashboard_baru',$data);
        $this->load->view('templates/adm_footer');
        $this->load->view('script/brg_baru');
    }
    function brg_reg(){
        $data['username'] = $this->session->userdata('username');
        $this->load->view('templates/adm_header');
        $this->load->view('templates/adm_sidebar');
        $this->load->view('adm_dashboard_register',$data);
        $this->load->view('templates/adm_footer');
        $this->load->view('script/brg_register');
    }
    function brg_rusak(){
        $data['username'] = $this->session->userdata('username');
        $this->load->view('templates/adm_header');
        $this->load->view('templates/adm_sidebar');
        $this->load->view('adm_dashboard_rusak',$data);
        $this->load->view('templates/adm_footer');
        $this->load->view('script/brg_rusak');
    }

    function summary(){
        $this->load->view('templates/adm_header');
        $this->load->view('templates/adm_sidebar');
        $this->load->view('adm_dashboard_rangkuman');
        $this->load->view('templates/adm_footer');
        $this->load->view('script/brg_rangkuman');
    }

    function user_list(){
        $this->load->view('templates/adm_header');
        $this->load->view('templates/adm_sidebar');
        $this->load->view('adm_dashboard_user');
        $this->load->view('templates/adm_footer');
        $this->load->view('script/super_admin');
    }


    function dataLogSystem(){
        $this->load->model('m_barang');
        $data = $this->m_barang->logList();
        echo json_encode($data);
    }

    function log_system(){
        $this->load->view('templates/adm_header');
        $this->load->view('templates/adm_sidebar');
        $this->load->view('adm_dashboard_syslog');
        $this->load->view('templates/adm_footer');
        $this->load->view('script/system_log');
    }

}



?>