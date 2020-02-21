<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Controller
{

    function __construct(){
        parent::__construct();
        
        $this->load->model('m_barang');
        $this->load->model('m_setting');
        if($this->session->userdata('status') != "login"){
            redirect(base_url("login"));
        }

        $username = $this->session->userdata('username');

        
    }

    function cekJumlah(){
        // $perencanaan = $this->m_barang->cek_jumlah("brg_perencanaan")->num_rows();
        // $baru = $this->m_barang->cek_jumlah("brg_baru")->num_rows();
        // $register = $this->m_barang->cek_jumlah("brg_register")->num_rows();
        // $rusak = $this->m_barang->cek_jumlah("brg_rusak")->num_rows();

        $perencanaan = $this->m_barang->cekJumlah('Perencanaan')->num_rows();
        $baru = $this->m_barang->cekJumlah('Baru')->num_rows();
        $register = $this->m_barang->cekJumlah('Terdaftar')->num_rows();
        $rusak = $this->m_barang->cekJumlah('Rusak')->num_rows();

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
        $data['idUser'] = $this->session->userdata('idUser');
        
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

    function setting(){
        // retrieve data kode primary dari database 
        $kodePrimary = $this->m_setting->kodePrimary();
        $primary = $kodePrimary[0]->primary;

        // retrieve data kode jenis dari database
        $kodeJenis = $this->m_setting->kodeJenis();
        $gps = $kodeJenis[0]->gps;
        $komputer = $kodeJenis[0]->komputer;
        $laptop = $kodeJenis[0]->laptop;
        $monitor = $kodeJenis[0]->monitor;
        $printer = $kodeJenis[0]->printer;
        $proyektor = $kodeJenis[0]->proyektor;
        $scanner= $kodeJenis[0]->scanner;
        $ups= $kodeJenis[0]->ups;
        $lain= $kodeJenis[0]->lain;

        // retrieve data kode bagian dari database
        $kodeBagian = $this->m_setting->kodeBagian();
        $tengah = $kodeBagian[0]->tengah;
        $timur = $kodeBagian[0]->timur;
        $barat = $kodeBagian[0]->barat;
        $selatan= $kodeBagian[0]->selatan;
        $utara = $kodeBagian[0]->utara;

        // retrieve data kode subbag dari database
        $kodeSubbag = $this->m_setting->kodeSubBagian();
        $dirut = $kodeSubbag[0]->dirut;
        $dirum = $kodeSubbag[0]->dirum;
        $dirtek = $kodeSubbag[0]->dirtek;
        $kacab = $kodeSubbag[0]->kacab;
        $kabag = $kodeSubbag[0]->kabag;
        $admin = $kodeSubbag[0]->admin;
        $pti = $kodeSubbag[0]->pti;
        $teknik = $kodeSubbag[0]->teknik;
        $hublang = $kodeSubbag[0]->hublang;
        $perencanaan = $kodeSubbag[0]->perencanaan;
        $asset = $kodeSubbag[0]->asset;
        $penertiban = $kodeSubbag[0]->penertiban;
        $pptka = $kodeSubbag[0]->pptka;
        $server = $kodeSubbag[0]->server;
        $umum = $kodeSubbag[0]->umum;
        $qc = $kodeSubbag[0]->qc;
        $lab = $kodeSubbag[0]->lab;
        $poli = $kodeSubbag[0]->poli;
        $humas = $kodeSubbag[0]->humas;
        $keuangan = $kodeSubbag[0]->keuangan;
        $kamtib = $kodeSubbag[0]->kamtib;
        
        $data = array(
            'primary' => $primary,
            'gps' => $gps,
            'komputer' => $komputer,
            'laptop' => $laptop,
            'monitor' => $monitor,
            'printer' => $printer,
            'proyektor' => $proyektor,
            'scanner' => $scanner,
            'ups' => $ups,
            'lain' => $lain,
            'tengah' => $tengah,
            'timur' => $timur,
            'barat' => $barat,
            'selatan' => $selatan,
            'utara' => $utara,
            'dirut' => $dirut,
            'dirum' => $dirum,
            'dirtek' => $dirtek,
            'kacab' => $kacab,
            'kabag' => $kabag,
            'admin' => $admin,
            'pti' => $pti,
            'teknik' => $teknik,
            'hublang' => $hublang,
            'perencanaan' => $perencanaan,
            'asset' => $asset,
            'penertiban' => $penertiban,
            'pptka' => $pptka,
            'server' => $server,
            'umum' => $umum,
            'qc' => $qc,
            'lab' => $lab,
            'poli' => $poli,
            'humas' => $humas,
            'keuangan' => $keuangan,
            'kamtib' => $kamtib
        );
        
        $this->load->view('templates/adm_header');
        $this->load->view('templates/adm_sidebar');
        $this->load->view('su_dashboard_setting',$data);
        $this->load->view('templates/adm_footer');
        $this->load->view('script/su_setting');
    }


    function profile(){
        $data['idUser'] = $this->session->userdata('idUser');
        $this->load->view('templates/adm_header');
        $this->load->view('templates/adm_sidebar');
        $this->load->view('adm_profile',$data);
        $this->load->view('templates/adm_footer');
        $this->load->view('script/adm_profile');
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