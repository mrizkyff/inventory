<?php
    class BrgRusak extends CI_Controller
    {
        function __construct(){
            parent::__construct;
            $this->load->model('m_brgRusak');
        }
        public function loadBarang(){
            $data = $this->m_brgRusak->tampilBarang();
            echo json_encode($data);
        }
    }
    
?>