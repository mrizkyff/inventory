<?php 
class M_brgRangkuman extends CI_Model
{
    function loadBarang(){
        return $this->db->get('daftar_barang')->result();
    }
}

?>