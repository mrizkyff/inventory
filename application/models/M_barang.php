<?php
class M_barang extends CI_Model
{
    function cekJumlah($status){
        $this->db->where('status',$status);
        return $this->db->get('daftar_barang');
    }

    function logList(){
        $hasil=$this->db->query("SELECT * FROM log_sistem ORDER BY date DESC");
        return $hasil->result();
    }
}


?>