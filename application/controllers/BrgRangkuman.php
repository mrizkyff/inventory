<?php 
    class BrgRangkuman extends CI_Controller
    {
        function __construct(){
            parent::__construct();
            $this->load->model('m_brgRangkuman');
        }
        function barangSummary(){
            $data = $this->m_brgRangkuman->loadBarang();
            echo json_encode($data);
        }
    }
    
?>

