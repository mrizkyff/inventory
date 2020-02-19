<?php
    class M_brgRusak extends CI_Model
    {
        function tampilBarang(){
            $hasil =  $this->db->get('brg_rusak');
            return $hasil->result();
        }        
    }
    
?>