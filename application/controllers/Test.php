<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller
{
    function coba(){
        $this->load->view('templates/adm_header');
        $this->load->view('templates/adm_sidebar');
        $this->load->view('adm_dashboard');
        $this->load->view('templates/adm_footer');
    }
}

?>