<?php
    class M_brgRusak extends CI_Model
    {
        function tampilBarang(){
            return $this->db->get('brg_rusak')->result();
        }        
    }
    
?>